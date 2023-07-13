<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetDownloadFileShrinkRequest extends Model
{
    /**
     * @example {"xxx";xxx}
     *
     * @var string
     */
    public $contextShrink;

    /**
     * @example iot-cn-npk1u******
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 62d949808bc742187xxxxxx
     *
     * @var string
     */
    public $longJobId;
    protected $_name = [
        'contextShrink' => 'Context',
        'iotInstanceId' => 'IotInstanceId',
        'longJobId'     => 'LongJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contextShrink) {
            $res['Context'] = $this->contextShrink;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->longJobId) {
            $res['LongJobId'] = $this->longJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDownloadFileShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->contextShrink = $map['Context'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['LongJobId'])) {
            $model->longJobId = $map['LongJobId'];
        }

        return $model;
    }
}
