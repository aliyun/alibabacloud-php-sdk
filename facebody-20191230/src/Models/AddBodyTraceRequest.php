<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\AddBodyTraceRequest\images;
use AlibabaCloud\Tea\Model;

class AddBodyTraceRequest extends Model
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
     * @var images[]
     */
    public $images;

    /**
     * @description 自定义信息。支持字母、数字、标点符号和汉字。不超过4096个字符。
     *
     * @var string
     */
    public $extraData;
    protected $_name = [
        'dbId'      => 'DbId',
        'personId'  => 'PersonId',
        'images'    => 'Images',
        'extraData' => 'ExtraData',
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
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBodyTraceRequest
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
            if (!empty($map['Images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }

        return $model;
    }
}
