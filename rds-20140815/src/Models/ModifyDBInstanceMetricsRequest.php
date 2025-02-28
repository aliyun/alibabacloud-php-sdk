<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceMetricsRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var string
     */
    public $metricsConfig;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'DBInstanceName'  => 'DBInstanceName',
        'metricsConfig'   => 'MetricsConfig',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scope'           => 'Scope',
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

        if (null !== $this->metricsConfig) {
            $res['MetricsConfig'] = $this->metricsConfig;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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

        if (isset($map['MetricsConfig'])) {
            $model->metricsConfig = $map['MetricsConfig'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
