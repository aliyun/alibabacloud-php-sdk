<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class ModifyCustomEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $customEndpointId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $nodeAutoEnter;

    /**
     * @var string
     */
    public $nodeIds;

    /**
     * @var string
     */
    public $nodeRole;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'customEndpointId' => 'CustomEndpointId',
        'DBInstanceName' => 'DBInstanceName',
        'name' => 'Name',
        'nodeAutoEnter' => 'NodeAutoEnter',
        'nodeIds' => 'NodeIds',
        'nodeRole' => 'NodeRole',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customEndpointId) {
            $res['CustomEndpointId'] = $this->customEndpointId;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeAutoEnter) {
            $res['NodeAutoEnter'] = $this->nodeAutoEnter;
        }

        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }

        if (null !== $this->nodeRole) {
            $res['NodeRole'] = $this->nodeRole;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CustomEndpointId'])) {
            $model->customEndpointId = $map['CustomEndpointId'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeAutoEnter'])) {
            $model->nodeAutoEnter = $map['NodeAutoEnter'];
        }

        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }

        if (isset($map['NodeRole'])) {
            $model->nodeRole = $map['NodeRole'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
