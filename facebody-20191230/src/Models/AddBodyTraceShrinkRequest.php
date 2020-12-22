<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class AddBodyTraceShrinkRequest extends Model
{
    /**
     * @description 数据库ID
     *
     * @var int
     */
    public $dbId;

    /**
     * @description 实体ID，可以包含数字、字母和下划线，相同db下不可以重复，长度1-64。
     *
     * @var int
     */
    public $personId;

    /**
     * @description Trace图片信息列表
     *
     * @var string
     */
    public $imagesShrink;

    /**
     * @description 自定义信息。支持字母、数字、标点符号和汉字。不超过4096个字符。
     *
     * @var string
     */
    public $extraData;
    protected $_name = [
        'dbId'         => 'DbId',
        'personId'     => 'PersonId',
        'imagesShrink' => 'Images',
        'extraData'    => 'ExtraData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->imagesShrink) {
            $res['Images'] = $this->imagesShrink;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBodyTraceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['Images'])) {
            $model->imagesShrink = $map['Images'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }

        return $model;
    }
}
