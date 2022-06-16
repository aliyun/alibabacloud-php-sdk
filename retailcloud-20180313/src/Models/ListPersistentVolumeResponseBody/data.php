<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPersistentVolumeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessModes;

    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pvcName;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $reclaimPolicy;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'accessModes'   => 'AccessModes',
        'capacity'      => 'Capacity',
        'createTime'    => 'CreateTime',
        'mountDir'      => 'MountDir',
        'name'          => 'Name',
        'pvcName'       => 'PvcName',
        'reason'        => 'Reason',
        'reclaimPolicy' => 'ReclaimPolicy',
        'status'        => 'Status',
        'storageClass'  => 'StorageClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessModes) {
            $res['AccessModes'] = $this->accessModes;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->mountDir) {
            $res['MountDir'] = $this->mountDir;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pvcName) {
            $res['PvcName'] = $this->pvcName;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->reclaimPolicy) {
            $res['ReclaimPolicy'] = $this->reclaimPolicy;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessModes'])) {
            $model->accessModes = $map['AccessModes'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MountDir'])) {
            $model->mountDir = $map['MountDir'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PvcName'])) {
            $model->pvcName = $map['PvcName'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['ReclaimPolicy'])) {
            $model->reclaimPolicy = $map['ReclaimPolicy'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
