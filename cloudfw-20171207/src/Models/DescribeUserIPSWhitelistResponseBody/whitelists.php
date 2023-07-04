<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistResponseBody;

use AlibabaCloud\Tea\Model;

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
        'direction'      => 'Direction',
        'listType'       => 'ListType',
        'listValue'      => 'ListValue',
        'whiteListValue' => 'WhiteListValue',
        'whiteType'      => 'WhiteType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['WhiteListValue'] = $this->whiteListValue;
        }
        if (null !== $this->whiteType) {
            $res['WhiteType'] = $this->whiteType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whitelists
     */
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
                $model->whiteListValue = $map['WhiteListValue'];
            }
        }
        if (isset($map['WhiteType'])) {
            $model->whiteType = $map['WhiteType'];
        }

        return $model;
    }
}
