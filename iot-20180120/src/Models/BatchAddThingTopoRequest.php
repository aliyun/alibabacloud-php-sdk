<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddThingTopoRequest\topoAddItem;
use AlibabaCloud\Tea\Model;

class BatchAddThingTopoRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $gwProductKey;

    /**
     * @var mixed[]
     */
    public $ext;

    /**
     * @var string
     */
    public $gwDeviceName;

    /**
     * @var topoAddItem[]
     */
    public $topoAddItem;
    protected $_name = [
        'apiProduct'    => 'ApiProduct',
        'apiRevision'   => 'ApiRevision',
        'iotInstanceId' => 'IotInstanceId',
        'gwProductKey'  => 'GwProductKey',
        'ext'           => 'Ext',
        'gwDeviceName'  => 'GwDeviceName',
        'topoAddItem'   => 'TopoAddItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->gwProductKey) {
            $res['GwProductKey'] = $this->gwProductKey;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->gwDeviceName) {
            $res['GwDeviceName'] = $this->gwDeviceName;
        }
        if (null !== $this->topoAddItem) {
            $res['TopoAddItem'] = [];
            if (null !== $this->topoAddItem && \is_array($this->topoAddItem)) {
                $n = 0;
                foreach ($this->topoAddItem as $item) {
                    $res['TopoAddItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddThingTopoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['GwProductKey'])) {
            $model->gwProductKey = $map['GwProductKey'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['GwDeviceName'])) {
            $model->gwDeviceName = $map['GwDeviceName'];
        }
        if (isset($map['TopoAddItem'])) {
            if (!empty($map['TopoAddItem'])) {
                $model->topoAddItem = [];
                $n                  = 0;
                foreach ($map['TopoAddItem'] as $item) {
                    $model->topoAddItem[$n++] = null !== $item ? topoAddItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
