<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class UpdateRabbitmqPublisherAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $exchangeName;

    /**
     * @var string
     */
    public $exchangeType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description'  => 'description',
        'exchangeName' => 'exchangeName',
        'exchangeType' => 'exchangeType',
        'name'         => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->exchangeName) {
            $res['exchangeName'] = $this->exchangeName;
        }
        if (null !== $this->exchangeType) {
            $res['exchangeType'] = $this->exchangeType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRabbitmqPublisherAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['exchangeName'])) {
            $model->exchangeName = $map['exchangeName'];
        }
        if (isset($map['exchangeType'])) {
            $model->exchangeType = $map['exchangeType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
