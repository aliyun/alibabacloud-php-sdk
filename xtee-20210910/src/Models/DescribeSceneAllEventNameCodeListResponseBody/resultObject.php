<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneAllEventNameCodeListResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneAllEventNameCodeListResponseBody\resultObject\children;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var children[]
     */
    public $children;

    /**
     * @example MORMAL
     *
     * @var string
     */
    public $createType;

    /**
     * @example de_aszbjb7236
     *
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @example MAIN
     *
     * @var string
     */
    public $eventType;
    protected $_name = [
        'children'   => 'children',
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
        if (null !== $this->children) {
            $res['children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['children'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['children'] as $item) {
                    $model->children[$n++] = null !== $item ? children::fromMap($item) : $item;
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
