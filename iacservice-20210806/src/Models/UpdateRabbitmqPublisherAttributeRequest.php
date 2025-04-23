<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

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
        'description' => 'description',
        'exchangeName' => 'exchangeName',
        'exchangeType' => 'exchangeType',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
