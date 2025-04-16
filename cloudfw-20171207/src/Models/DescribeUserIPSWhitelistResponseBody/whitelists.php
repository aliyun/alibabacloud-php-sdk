<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistResponseBody;

use AlibabaCloud\Dara\Model;

class whitelists extends Model
{
    /**
     * @var int
     */
    public $direction;

    /**
     * @var int
     */
    public $listType;

    /**
     * @var string
     */
    public $listValue;

    /**
     * @var string[]
     */
    public $whiteListValue;

    /**
     * @var int
     */
    public $whiteType;
    protected $_name = [
        'direction' => 'Direction',
        'listType' => 'ListType',
        'listValue' => 'ListValue',
        'whiteListValue' => 'WhiteListValue',
        'whiteType' => 'WhiteType',
    ];

    public function validate()
    {
        if (\is_array($this->whiteListValue)) {
            Model::validateArray($this->whiteListValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
        }

        if (null !== $this->listValue) {
            $res['ListValue'] = $this->listValue;
        }

        if (null !== $this->whiteListValue) {
            if (\is_array($this->whiteListValue)) {
                $res['WhiteListValue'] = [];
                $n1 = 0;
                foreach ($this->whiteListValue as $item1) {
                    $res['WhiteListValue'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->whiteType) {
            $res['WhiteType'] = $this->whiteType;
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }

        if (isset($map['ListValue'])) {
            $model->listValue = $map['ListValue'];
        }

        if (isset($map['WhiteListValue'])) {
            if (!empty($map['WhiteListValue'])) {
                $model->whiteListValue = [];
                $n1 = 0;
                foreach ($map['WhiteListValue'] as $item1) {
                    $model->whiteListValue[$n1++] = $item1;
                }
            }
        }

        if (isset($map['WhiteType'])) {
            $model->whiteType = $map['WhiteType'];
        }

        return $model;
    }
}
