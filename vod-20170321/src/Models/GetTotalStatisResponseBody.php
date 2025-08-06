<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetTotalStatisResponseBody extends Model
{
    /**
     * @var int
     */
    public $networkOut;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $storageUtilization;

    /**
     * @var int
     */
    public $transcodeDuration;
    protected $_name = [
        'networkOut' => 'NetworkOut',
        'requestId' => 'RequestId',
        'storageUtilization' => 'StorageUtilization',
        'transcodeDuration' => 'TranscodeDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkOut) {
            $res['NetworkOut'] = $this->networkOut;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageUtilization) {
            $res['StorageUtilization'] = $this->storageUtilization;
        }

        if (null !== $this->transcodeDuration) {
            $res['TranscodeDuration'] = $this->transcodeDuration;
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
        if (isset($map['NetworkOut'])) {
            $model->networkOut = $map['NetworkOut'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StorageUtilization'])) {
            $model->storageUtilization = $map['StorageUtilization'];
        }

        if (isset($map['TranscodeDuration'])) {
            $model->transcodeDuration = $map['TranscodeDuration'];
        }

        return $model;
    }
}
