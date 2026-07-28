<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data\clusterInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data\clusterInfo\milvusResourceInfoList\podsList;

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
    public $cuRatio;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var bool
     */
    public $dataDiskEnabled;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $dataDiskStorageClass;

    /**
     * @var podsList[]
     */
    public $podsList;
    protected $_name = [
        'componentType' => 'ComponentType',
        'cuNum' => 'CuNum',
        'cuRatio' => 'CuRatio',
        'diskSize' => 'DiskSize',
        'diskType' => 'DiskType',
        'payType' => 'PayType',
        'replica' => 'Replica',
        'zoneId' => 'ZoneId',
        'dataDiskEnabled' => 'dataDiskEnabled',
        'dataDiskSize' => 'dataDiskSize',
        'dataDiskStorageClass' => 'dataDiskStorageClass',
        'podsList' => 'podsList',
    ];

    public function validate()
    {
        if (\is_array($this->podsList)) {
            Model::validateArray($this->podsList);
        }
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

        if (null !== $this->cuRatio) {
            $res['CuRatio'] = $this->cuRatio;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->dataDiskEnabled) {
            $res['dataDiskEnabled'] = $this->dataDiskEnabled;
        }

        if (null !== $this->dataDiskSize) {
            $res['dataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->dataDiskStorageClass) {
            $res['dataDiskStorageClass'] = $this->dataDiskStorageClass;
        }

        if (null !== $this->podsList) {
            if (\is_array($this->podsList)) {
                $res['podsList'] = [];
                $n1 = 0;
                foreach ($this->podsList as $item1) {
                    $res['podsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['CuRatio'])) {
            $model->cuRatio = $map['CuRatio'];
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['dataDiskEnabled'])) {
            $model->dataDiskEnabled = $map['dataDiskEnabled'];
        }

        if (isset($map['dataDiskSize'])) {
            $model->dataDiskSize = $map['dataDiskSize'];
        }

        if (isset($map['dataDiskStorageClass'])) {
            $model->dataDiskStorageClass = $map['dataDiskStorageClass'];
        }

        if (isset($map['podsList'])) {
            if (!empty($map['podsList'])) {
                $model->podsList = [];
                $n1 = 0;
                foreach ($map['podsList'] as $item1) {
                    $model->podsList[$n1] = podsList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
