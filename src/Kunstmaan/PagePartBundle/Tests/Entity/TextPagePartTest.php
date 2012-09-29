<?php
namespace Kunstmaan\PagePartBundle\Tests\Entity;
use Kunstmaan\PagePartBundle\Entity\TextPagePart;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-20 at 14:42:49.
 */
class TextPagePartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TextPagePart
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new TextPagePart();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Entity\TextPagePart::setContent
     * @covers Kunstmaan\PagePartBundle\Entity\TextPagePart::getContent
     */
    public function testSetGetContent()
    {
        $this->object->setContent("tèst content with s3ç!àL");
        $this->assertEquals($this->object->getContent(), "tèst content with s3ç!àL");
    }

    /**
     * Generated from @assert () == "TextPagePart " . $this->object->getContent().
     *
     * @covers                Kunstmaan\PagePartBundle\Entity\TextPagePart::__toString
     */
    public function test__toString()
    {
        $this->assertEquals("TextPagePart " . $this->object->getContent(), $this->object->__toString());
    }

    /**
     * Generated from @assert () == 'KunstmaanPagePartBundle:TextPagePart:view.html.twig'.
     *
     * @covers                Kunstmaan\PagePartBundle\Entity\TextPagePart::getDefaultView
     */
    public function testGetDefaultView()
    {
        $this->assertEquals('KunstmaanPagePartBundle:TextPagePart:view.html.twig', $this->object->getDefaultView());
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Entity\TextPagePart::getDefaultAdminType
     */
    public function testGetDefaultAdminType()
    {
        $this->assertInstanceOf('Kunstmaan\PagePartBundle\Form\TextPagePartAdminType', $this->object->getDefaultAdminType());
    }
}
