<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeUrlModerationResultResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeUrlModerationResultResponseBody\data\extraInfo;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeUrlModerationResultResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 26769ada6e264e7ba9aa048241e12be9
     *
     * @var string
     */
    public $dataId;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @example B0963D30-BAB4-562F-9ED0-7A23AEC51C7C
     *
     * @var string
     */
    public $reqId;

    /**
     * @var result[]
     */
    public $result;
    protected $_name = [
        'dataId'    => 'DataId',
        'extraInfo' => 'ExtraInfo',
        'reqId'     => 'ReqId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toMap() : null;
        }
        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }
        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
