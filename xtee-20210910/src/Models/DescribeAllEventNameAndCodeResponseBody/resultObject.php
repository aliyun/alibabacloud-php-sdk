<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllEventNameAndCodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllEventNameAndCodeResponseBody\resultObject\children;

class resultObject extends Model
{
    /**
     * @var children[]
     */
    public $children;

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
        'children' => 'children',
        'createType' => 'createType',
        'eventCode' => 'eventCode',
        'eventName' => 'eventName',
        'eventType' => 'eventType',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

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
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['children'] as $item1) {
                    $model->children[$n1] = children::fromMap($item1);
                    ++$n1;
                }
            }
        }

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
