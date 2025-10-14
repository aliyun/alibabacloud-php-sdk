<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class CreateGdnInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gdnMode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rplConflictStrategy;

    /**
     * @var string
     */
    public $rplDmlStrategy;

    /**
     * @var bool
     */
    public $rplSyncDdl;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'description' => 'Description',
        'gdnMode' => 'GdnMode',
        'regionId' => 'RegionId',
        'rplConflictStrategy' => 'RplConflictStrategy',
        'rplDmlStrategy' => 'RplDmlStrategy',
        'rplSyncDdl' => 'RplSyncDdl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gdnMode) {
            $res['GdnMode'] = $this->gdnMode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rplConflictStrategy) {
            $res['RplConflictStrategy'] = $this->rplConflictStrategy;
        }

        if (null !== $this->rplDmlStrategy) {
            $res['RplDmlStrategy'] = $this->rplDmlStrategy;
        }

        if (null !== $this->rplSyncDdl) {
            $res['RplSyncDdl'] = $this->rplSyncDdl;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GdnMode'])) {
            $model->gdnMode = $map['GdnMode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RplConflictStrategy'])) {
            $model->rplConflictStrategy = $map['RplConflictStrategy'];
        }

        if (isset($map['RplDmlStrategy'])) {
            $model->rplDmlStrategy = $map['RplDmlStrategy'];
        }

        if (isset($map['RplSyncDdl'])) {
            $model->rplSyncDdl = $map['RplSyncDdl'];
        }

        return $model;
    }
}
