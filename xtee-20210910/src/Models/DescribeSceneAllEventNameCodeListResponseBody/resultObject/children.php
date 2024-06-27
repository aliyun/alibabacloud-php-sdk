<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneAllEventNameCodeListResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

class children extends Model
{
    /**
     * @example NORMAL
     *
     * @var string
     */
    public $createType;

    /**
     * @example de_aamexg3015
     *
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @example BYPASS
     *
     * @var string
     */
    public $eventType;
    protected $_name = [
        'createType' => 'createType',
        'eventCode'  => 'eventCode',
        'eventName'  => 'eventName',
        'eventType'  => 'eventType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return children
     */
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
