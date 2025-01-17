<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeAssetsScaProcessNumRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;
    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'bizType'  => 'BizType',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->uuidList) {
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1              = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = [];
                $n1              = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
