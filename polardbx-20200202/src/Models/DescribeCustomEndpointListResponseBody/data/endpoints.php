<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCustomEndpointListResponseBody\data;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
{
    /**
     * @var string[]
     */
    public $cnNames;

    /**
     * @var string
     */
    public $connectionString;

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
     * @var string
     */
    public $nodeAutoEnter;

    /**
     * @var string
     */
    public $nodeRole;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'cnNames' => 'CnNames',
        'connectionString' => 'ConnectionString',
        'customEndpointId' => 'CustomEndpointId',
        'DBInstanceName' => 'DBInstanceName',
        'name' => 'Name',
        'nodeAutoEnter' => 'NodeAutoEnter',
        'nodeRole' => 'NodeRole',
        'port' => 'Port',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->cnNames)) {
            Model::validateArray($this->cnNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnNames) {
            if (\is_array($this->cnNames)) {
                $res['CnNames'] = [];
                $n1 = 0;
                foreach ($this->cnNames as $item1) {
                    $res['CnNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

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

        if (null !== $this->nodeRole) {
            $res['NodeRole'] = $this->nodeRole;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['CnNames'])) {
            if (!empty($map['CnNames'])) {
                $model->cnNames = [];
                $n1 = 0;
                foreach ($map['CnNames'] as $item1) {
                    $model->cnNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

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

        if (isset($map['NodeRole'])) {
            $model->nodeRole = $map['NodeRole'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
