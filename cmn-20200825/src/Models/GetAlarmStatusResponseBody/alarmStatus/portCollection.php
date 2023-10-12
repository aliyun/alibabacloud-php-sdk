<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus\portCollection\portList;
use AlibabaCloud\Tea\Model;

class portCollection extends Model
{
    /**
     * @example 端口集描述
     *
     * @var string
     */
    public $portCollectionDescription;

    /**
     * @example p-l3oo18oaz1n1cnfp
     *
     * @var string
     */
    public $portCollectionId;

    /**
     * @example 端口集
     *
     * @var string
     */
    public $portCollectionName;

    /**
     * @var portList[]
     */
    public $portList;
    protected $_name = [
        'portCollectionDescription' => 'PortCollectionDescription',
        'portCollectionId'          => 'PortCollectionId',
        'portCollectionName'        => 'PortCollectionName',
        'portList'                  => 'PortList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portCollectionDescription) {
            $res['PortCollectionDescription'] = $this->portCollectionDescription;
        }
        if (null !== $this->portCollectionId) {
            $res['PortCollectionId'] = $this->portCollectionId;
        }
        if (null !== $this->portCollectionName) {
            $res['PortCollectionName'] = $this->portCollectionName;
        }
        if (null !== $this->portList) {
            $res['PortList'] = [];
            if (null !== $this->portList && \is_array($this->portList)) {
                $n = 0;
                foreach ($this->portList as $item) {
                    $res['PortList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portCollection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortCollectionDescription'])) {
            $model->portCollectionDescription = $map['PortCollectionDescription'];
        }
        if (isset($map['PortCollectionId'])) {
            $model->portCollectionId = $map['PortCollectionId'];
        }
        if (isset($map['PortCollectionName'])) {
            $model->portCollectionName = $map['PortCollectionName'];
        }
        if (isset($map['PortList'])) {
            if (!empty($map['PortList'])) {
                $model->portList = [];
                $n               = 0;
                foreach ($map['PortList'] as $item) {
                    $model->portList[$n++] = null !== $item ? portList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
