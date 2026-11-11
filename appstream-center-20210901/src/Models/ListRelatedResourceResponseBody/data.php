<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRelatedResourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $desktopCount;

    /**
     * @var int
     */
    public $desktopGroupCount;

    /**
     * @var int
     */
    public $templateCount;
    protected $_name = [
        'desktopCount' => 'DesktopCount',
        'desktopGroupCount' => 'DesktopGroupCount',
        'templateCount' => 'TemplateCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }

        if (null !== $this->desktopGroupCount) {
            $res['DesktopGroupCount'] = $this->desktopGroupCount;
        }

        if (null !== $this->templateCount) {
            $res['TemplateCount'] = $this->templateCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }

        if (isset($map['DesktopGroupCount'])) {
            $model->desktopGroupCount = $map['DesktopGroupCount'];
        }

        if (isset($map['TemplateCount'])) {
            $model->templateCount = $map['TemplateCount'];
        }

        return $model;
    }
}
