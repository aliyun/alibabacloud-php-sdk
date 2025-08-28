<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class MasterNodeShutDownFailOverRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $DBFaultMode;

    /**
     * @var string
     */
    public $DBNodes;

    /**
     * @var string
     */
    public $failMode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $proxyFaultMode;

    /**
     * @var string
     */
    public $proxyInstanceIds;
    protected $_name = [
        'category' => 'Category',
        'DBFaultMode' => 'DBFaultMode',
        'DBNodes' => 'DBNodes',
        'failMode' => 'FailMode',
        'instanceId' => 'InstanceId',
        'proxyFaultMode' => 'ProxyFaultMode',
        'proxyInstanceIds' => 'ProxyInstanceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->DBFaultMode) {
            $res['DBFaultMode'] = $this->DBFaultMode;
        }

        if (null !== $this->DBNodes) {
            $res['DBNodes'] = $this->DBNodes;
        }

        if (null !== $this->failMode) {
            $res['FailMode'] = $this->failMode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->proxyFaultMode) {
            $res['ProxyFaultMode'] = $this->proxyFaultMode;
        }

        if (null !== $this->proxyInstanceIds) {
            $res['ProxyInstanceIds'] = $this->proxyInstanceIds;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['DBFaultMode'])) {
            $model->DBFaultMode = $map['DBFaultMode'];
        }

        if (isset($map['DBNodes'])) {
            $model->DBNodes = $map['DBNodes'];
        }

        if (isset($map['FailMode'])) {
            $model->failMode = $map['FailMode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProxyFaultMode'])) {
            $model->proxyFaultMode = $map['ProxyFaultMode'];
        }

        if (isset($map['ProxyInstanceIds'])) {
            $model->proxyInstanceIds = $map['ProxyInstanceIds'];
        }

        return $model;
    }
}
