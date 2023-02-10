<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models;

use AlibabaCloud\Tea\Model;

class AddImageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $boxesShrink;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var int
     */
    public $detectLimit;

    /**
     * @var int
     */
    public $intAttr;

    /**
     * @var string
     */
    public $picContent;

    /**
     * @var string
     */
    public $picName;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $strAttr;
    protected $_name = [
        'boxesShrink'   => 'Boxes',
        'customContent' => 'CustomContent',
        'detectLimit'   => 'DetectLimit',
        'intAttr'       => 'IntAttr',
        'picContent'    => 'PicContent',
        'picName'       => 'PicName',
        'picUrl'        => 'PicUrl',
        'strAttr'       => 'StrAttr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxesShrink) {
            $res['Boxes'] = $this->boxesShrink;
        }
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->detectLimit) {
            $res['DetectLimit'] = $this->detectLimit;
        }
        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }
        if (null !== $this->picContent) {
            $res['PicContent'] = $this->picContent;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            $model->boxesShrink = $map['Boxes'];
        }
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['DetectLimit'])) {
            $model->detectLimit = $map['DetectLimit'];
        }
        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }

        return $model;
    }
}
