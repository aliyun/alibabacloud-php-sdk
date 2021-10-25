<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody\gadInstances;

use AlibabaCloud\Tea\Model;

class gadInstanceMembers extends Model
{
    /**
     * @var string
     */
    public $DBInstanceID;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $dtsInstance;
    protected $_name = [
        'DBInstanceID'  => 'DBInstanceID',
        'engine'        => 'Engine',
        'engineVersion' => 'EngineVersion',
        'regionId'      => 'RegionId',
        'role'          => 'Role',
        'status'        => 'Status',
        'dtsInstance'   => 'DtsInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dtsInstance) {
            $res['DtsInstance'] = $this->dtsInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gadInstanceMembers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DtsInstance'])) {
            $model->dtsInstance = $map['DtsInstance'];
        }

        return $model;
    }
}
