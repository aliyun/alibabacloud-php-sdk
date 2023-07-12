<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListParserDestinationRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var bool
     */
    public $isFailover;

    /**
     * @var int
     */
    public $parserId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'isFailover'    => 'IsFailover',
        'parserId'      => 'ParserId',
    ];

    public function validate()
    {
        Model::validateRequired('parserId', $this->parserId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->isFailover) {
            $res['IsFailover'] = $this->isFailover;
        }
        if (null !== $this->parserId) {
            $res['ParserId'] = $this->parserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListParserDestinationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['IsFailover'])) {
            $model->isFailover = $map['IsFailover'];
        }
        if (isset($map['ParserId'])) {
            $model->parserId = $map['ParserId'];
        }

        return $model;
    }
}
