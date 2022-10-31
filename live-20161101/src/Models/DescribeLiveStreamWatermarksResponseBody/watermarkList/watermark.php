<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponseBody\watermarkList;

use AlibabaCloud\Tea\Model;

class watermark extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $offsetCorner;

    /**
     * @var string
     */
    public $pictureUrl;

    /**
     * @var int
     */
    public $refHeight;

    /**
     * @var int
     */
    public $refWidth;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var int
     */
    public $transparency;

    /**
     * @var int
     */
    public $type;

    /**
     * @var float
     */
    public $XOffset;

    /**
     * @var float
     */
    public $YOffset;
    protected $_name = [
        'description'  => 'Description',
        'height'       => 'Height',
        'name'         => 'Name',
        'offsetCorner' => 'OffsetCorner',
        'pictureUrl'   => 'PictureUrl',
        'refHeight'    => 'RefHeight',
        'refWidth'     => 'RefWidth',
        'templateId'   => 'TemplateId',
        'transparency' => 'Transparency',
        'type'         => 'Type',
        'XOffset'      => 'XOffset',
        'YOffset'      => 'YOffset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->offsetCorner) {
            $res['OffsetCorner'] = $this->offsetCorner;
        }
        if (null !== $this->pictureUrl) {
            $res['PictureUrl'] = $this->pictureUrl;
        }
        if (null !== $this->refHeight) {
            $res['RefHeight'] = $this->refHeight;
        }
        if (null !== $this->refWidth) {
            $res['RefWidth'] = $this->refWidth;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->transparency) {
            $res['Transparency'] = $this->transparency;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->XOffset) {
            $res['XOffset'] = $this->XOffset;
        }
        if (null !== $this->YOffset) {
            $res['YOffset'] = $this->YOffset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return watermark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OffsetCorner'])) {
            $model->offsetCorner = $map['OffsetCorner'];
        }
        if (isset($map['PictureUrl'])) {
            $model->pictureUrl = $map['PictureUrl'];
        }
        if (isset($map['RefHeight'])) {
            $model->refHeight = $map['RefHeight'];
        }
        if (isset($map['RefWidth'])) {
            $model->refWidth = $map['RefWidth'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Transparency'])) {
            $model->transparency = $map['Transparency'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['XOffset'])) {
            $model->XOffset = $map['XOffset'];
        }
        if (isset($map['YOffset'])) {
            $model->YOffset = $map['YOffset'];
        }

        return $model;
    }
}
