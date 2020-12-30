<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotoStoreResponseBody;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotoStoreResponseBody\photoStore\buckets;
use AlibabaCloud\Tea\Model;

class photoStore extends Model
{
    /**
     * @var int
     */
    public $autoCleanDays;

    /**
     * @var string
     */
    public $idStr;

    /**
     * @var int
     */
    public $mtime;

    /**
     * @var int
     */
    public $ctime;

    /**
     * @var int
     */
    public $defaultTrashQuota;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var buckets[]
     */
    public $buckets;

    /**
     * @var int
     */
    public $defaultQuota;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $autoCleanEnabled;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'autoCleanDays'     => 'AutoCleanDays',
        'idStr'             => 'IdStr',
        'mtime'             => 'Mtime',
        'ctime'             => 'Ctime',
        'defaultTrashQuota' => 'DefaultTrashQuota',
        'remark'            => 'Remark',
        'buckets'           => 'Buckets',
        'defaultQuota'      => 'DefaultQuota',
        'name'              => 'Name',
        'autoCleanEnabled'  => 'AutoCleanEnabled',
        'id'                => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCleanDays) {
            $res['AutoCleanDays'] = $this->autoCleanDays;
        }
        if (null !== $this->idStr) {
            $res['IdStr'] = $this->idStr;
        }
        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->defaultTrashQuota) {
            $res['DefaultTrashQuota'] = $this->defaultTrashQuota;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->buckets) {
            $res['Buckets'] = [];
            if (null !== $this->buckets && \is_array($this->buckets)) {
                $n = 0;
                foreach ($this->buckets as $item) {
                    $res['Buckets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultQuota) {
            $res['DefaultQuota'] = $this->defaultQuota;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->autoCleanEnabled) {
            $res['AutoCleanEnabled'] = $this->autoCleanEnabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return photoStore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCleanDays'])) {
            $model->autoCleanDays = $map['AutoCleanDays'];
        }
        if (isset($map['IdStr'])) {
            $model->idStr = $map['IdStr'];
        }
        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['DefaultTrashQuota'])) {
            $model->defaultTrashQuota = $map['DefaultTrashQuota'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Buckets'])) {
            if (!empty($map['Buckets'])) {
                $model->buckets = [];
                $n              = 0;
                foreach ($map['Buckets'] as $item) {
                    $model->buckets[$n++] = null !== $item ? buckets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultQuota'])) {
            $model->defaultQuota = $map['DefaultQuota'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AutoCleanEnabled'])) {
            $model->autoCleanEnabled = $map['AutoCleanEnabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
