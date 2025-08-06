<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceResponseBody\instance\defaultEndpoint;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceResponseBody\instance\domainConfig;

class instance extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var defaultEndpoint
     */
    public $defaultEndpoint;

    /**
     * @var string
     */
    public $description;

    /**
     * @var domainConfig
     */
    public $domainConfig;

    /**
     * @var string[]
     */
    public $egressAddresses;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultEndpoint' => 'DefaultEndpoint',
        'description' => 'Description',
        'domainConfig' => 'DomainConfig',
        'egressAddresses' => 'EgressAddresses',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->defaultEndpoint) {
            $this->defaultEndpoint->validate();
        }
        if (null !== $this->domainConfig) {
            $this->domainConfig->validate();
        }
        if (\is_array($this->egressAddresses)) {
            Model::validateArray($this->egressAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultEndpoint) {
            $res['DefaultEndpoint'] = null !== $this->defaultEndpoint ? $this->defaultEndpoint->toArray($noStream) : $this->defaultEndpoint;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->domainConfig) {
            $res['DomainConfig'] = null !== $this->domainConfig ? $this->domainConfig->toArray($noStream) : $this->domainConfig;
        }

        if (null !== $this->egressAddresses) {
            if (\is_array($this->egressAddresses)) {
                $res['EgressAddresses'] = [];
                $n1 = 0;
                foreach ($this->egressAddresses as $item1) {
                    $res['EgressAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultEndpoint'])) {
            $model->defaultEndpoint = defaultEndpoint::fromMap($map['DefaultEndpoint']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DomainConfig'])) {
            $model->domainConfig = domainConfig::fromMap($map['DomainConfig']);
        }

        if (isset($map['EgressAddresses'])) {
            if (!empty($map['EgressAddresses'])) {
                $model->egressAddresses = [];
                $n1 = 0;
                foreach ($map['EgressAddresses'] as $item1) {
                    $model->egressAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
