<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllEventNameAndCodeResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class children extends Model
{
    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventType;
    protected $_name = [
        'createType' => 'createType',
        'eventCode' => 'eventCode',
        'eventName' => 'eventName',
        'eventType' => 'eventType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }

        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }

        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }

        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
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
        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }

        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }

        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }

        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }

        return $model;
    }
}
