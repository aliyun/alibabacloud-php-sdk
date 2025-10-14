<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataStorageTtlRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logStoreColdTtl;

    /**
     * @var string
     */
    public $logStoreHotTtl;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $logStoreTtl;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'lang' => 'Lang',
        'logStoreColdTtl' => 'LogStoreColdTtl',
        'logStoreHotTtl' => 'LogStoreHotTtl',
        'logStoreName' => 'LogStoreName',
        'logStoreTtl' => 'LogStoreTtl',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logStoreColdTtl) {
            $res['LogStoreColdTtl'] = $this->logStoreColdTtl;
        }

        if (null !== $this->logStoreHotTtl) {
            $res['LogStoreHotTtl'] = $this->logStoreHotTtl;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->logStoreTtl) {
            $res['LogStoreTtl'] = $this->logStoreTtl;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogStoreColdTtl'])) {
            $model->logStoreColdTtl = $map['LogStoreColdTtl'];
        }

        if (isset($map['LogStoreHotTtl'])) {
            $model->logStoreHotTtl = $map['LogStoreHotTtl'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['LogStoreTtl'])) {
            $model->logStoreTtl = $map['LogStoreTtl'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
