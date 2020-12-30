<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class EditPhotoStoreRequest extends Model
{
    /**
     * @var string
     */
    public $autoCleanEnabled;

    /**
     * @var int
     */
    public $autoCleanDays;

    /**
     * @var int
     */
    public $defaultQuota;

    /**
     * @var int
     */
    public $defaultTrashQuota;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $storeName;
    protected $_name = [
        'autoCleanEnabled'  => 'AutoCleanEnabled',
        'autoCleanDays'     => 'AutoCleanDays',
        'defaultQuota'      => 'DefaultQuota',
        'defaultTrashQuota' => 'DefaultTrashQuota',
        'remark'            => 'Remark',
        'storeName'         => 'StoreName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCleanEnabled) {
            $res['AutoCleanEnabled'] = $this->autoCleanEnabled;
        }
        if (null !== $this->autoCleanDays) {
            $res['AutoCleanDays'] = $this->autoCleanDays;
        }
        if (null !== $this->defaultQuota) {
            $res['DefaultQuota'] = $this->defaultQuota;
        }
        if (null !== $this->defaultTrashQuota) {
            $res['DefaultTrashQuota'] = $this->defaultTrashQuota;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditPhotoStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCleanEnabled'])) {
            $model->autoCleanEnabled = $map['AutoCleanEnabled'];
        }
        if (isset($map['AutoCleanDays'])) {
            $model->autoCleanDays = $map['AutoCleanDays'];
        }
        if (isset($map['DefaultQuota'])) {
            $model->defaultQuota = $map['DefaultQuota'];
        }
        if (isset($map['DefaultTrashQuota'])) {
            $model->defaultTrashQuota = $map['DefaultTrashQuota'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }

        return $model;
    }
}
