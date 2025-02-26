<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesResponseBody\data\clusterInfo;

use AlibabaCloud\Dara\Model;

class milvusResourceInfoList extends Model
{
    /**
     * @var string
     */
    public $componentType;
    /**
     * @var int
     */
    public $cuNum;
    /**
     * @var int
     */
    public $diskSize;
    /**
     * @var string
     */
    public $diskType;
    /**
     * @var int
     */
    public $replica;
    protected $_name = [
        'componentType' => 'ComponentType',
        'cuNum'         => 'CuNum',
        'diskSize'      => 'DiskSize',
        'diskType'      => 'DiskType',
        'replica'       => 'Replica',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->cuNum) {
            $res['CuNum'] = $this->cuNum;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
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
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['CuNum'])) {
            $model->cuNum = $map['CuNum'];
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }

        return $model;
    }
}
