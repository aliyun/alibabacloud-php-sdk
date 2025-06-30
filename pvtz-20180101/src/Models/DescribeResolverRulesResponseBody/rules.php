<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponseBody\rules\bindEdgeDnsClusters;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponseBody\rules\bindVpcs;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponseBody\rules\forwardIps;

class rules extends Model
{
    /**
     * @var bindEdgeDnsClusters[]
     */
    public $bindEdgeDnsClusters;

    /**
     * @var bindVpcs[]
     */
    public $bindVpcs;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var forwardIps[]
     */
    public $forwardIps;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'bindEdgeDnsClusters' => 'BindEdgeDnsClusters',
        'bindVpcs' => 'BindVpcs',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'endpointId' => 'EndpointId',
        'endpointName' => 'EndpointName',
        'forwardIps' => 'ForwardIps',
        'id' => 'Id',
        'name' => 'Name',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        if (\is_array($this->bindEdgeDnsClusters)) {
            Model::validateArray($this->bindEdgeDnsClusters);
        }
        if (\is_array($this->bindVpcs)) {
            Model::validateArray($this->bindVpcs);
        }
        if (\is_array($this->forwardIps)) {
            Model::validateArray($this->forwardIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindEdgeDnsClusters) {
            if (\is_array($this->bindEdgeDnsClusters)) {
                $res['BindEdgeDnsClusters'] = [];
                $n1 = 0;
                foreach ($this->bindEdgeDnsClusters as $item1) {
                    $res['BindEdgeDnsClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bindVpcs) {
            if (\is_array($this->bindVpcs)) {
                $res['BindVpcs'] = [];
                $n1 = 0;
                foreach ($this->bindVpcs as $item1) {
                    $res['BindVpcs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }

        if (null !== $this->forwardIps) {
            if (\is_array($this->forwardIps)) {
                $res['ForwardIps'] = [];
                $n1 = 0;
                foreach ($this->forwardIps as $item1) {
                    $res['ForwardIps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['BindEdgeDnsClusters'])) {
            if (!empty($map['BindEdgeDnsClusters'])) {
                $model->bindEdgeDnsClusters = [];
                $n1 = 0;
                foreach ($map['BindEdgeDnsClusters'] as $item1) {
                    $model->bindEdgeDnsClusters[$n1] = bindEdgeDnsClusters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BindVpcs'])) {
            if (!empty($map['BindVpcs'])) {
                $model->bindVpcs = [];
                $n1 = 0;
                foreach ($map['BindVpcs'] as $item1) {
                    $model->bindVpcs[$n1] = bindVpcs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }

        if (isset($map['ForwardIps'])) {
            if (!empty($map['ForwardIps'])) {
                $model->forwardIps = [];
                $n1 = 0;
                foreach ($map['ForwardIps'] as $item1) {
                    $model->forwardIps[$n1] = forwardIps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
