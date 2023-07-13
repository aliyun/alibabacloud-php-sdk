<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySpeechPushJobSpeechRequest extends Model
{
    /**
     * @example iot-060*****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 0Ykj************************Av0I
     *
     * @var string
     */
    public $jobCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'jobCode'       => 'JobCode',
        'pageId'        => 'PageId',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobCode) {
            $res['JobCode'] = $this->jobCode;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpeechPushJobSpeechRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobCode'])) {
            $model->jobCode = $map['JobCode'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
