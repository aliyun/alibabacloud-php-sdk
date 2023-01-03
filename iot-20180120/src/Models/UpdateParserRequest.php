<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateParserRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example iot-8t***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example DataParserTwo
     *
     * @var string
     */
    public $name;

    /**
     * @example 1001
     *
     * @var int
     */
    public $parserId;
    protected $_name = [
        'description'   => 'Description',
        'iotInstanceId' => 'IotInstanceId',
        'name'          => 'Name',
        'parserId'      => 'ParserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parserId) {
            $res['ParserId'] = $this->parserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateParserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParserId'])) {
            $model->parserId = $map['ParserId'];
        }

        return $model;
    }
}
