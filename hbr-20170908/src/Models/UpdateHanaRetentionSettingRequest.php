<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class UpdateHanaRetentionSettingRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var bool
     */
    public $disabled;
    /**
     * @var int
     */
    public $retentionDays;
    /**
     * @var string
     */
    public $schedule;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'databaseName'  => 'DatabaseName',
        'disabled'      => 'Disabled',
        'retentionDays' => 'RetentionDays',
        'schedule'      => 'Schedule',
        'vaultId'       => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }

        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }

        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }

        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
