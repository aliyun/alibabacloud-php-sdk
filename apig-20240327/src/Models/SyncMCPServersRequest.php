<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersRequest\nacosMcpServers;

class SyncMCPServersRequest extends Model
{
    /**
     * @var string[]
     */
    public $domainIds;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var nacosMcpServers[]
     */
    public $nacosMcpServers;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'domainIds' => 'domainIds',
        'gatewayId' => 'gatewayId',
        'nacosMcpServers' => 'nacosMcpServers',
        'namespace' => 'namespace',
        'sourceId' => 'sourceId',
    ];

    public function validate()
    {
        if (\is_array($this->domainIds)) {
            Model::validateArray($this->domainIds);
        }
        if (\is_array($this->nacosMcpServers)) {
            Model::validateArray($this->nacosMcpServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainIds) {
            if (\is_array($this->domainIds)) {
                $res['domainIds'] = [];
                $n1 = 0;
                foreach ($this->domainIds as $item1) {
                    $res['domainIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->nacosMcpServers) {
            if (\is_array($this->nacosMcpServers)) {
                $res['nacosMcpServers'] = [];
                $n1 = 0;
                foreach ($this->nacosMcpServers as $item1) {
                    $res['nacosMcpServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
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
        if (isset($map['domainIds'])) {
            if (!empty($map['domainIds'])) {
                $model->domainIds = [];
                $n1 = 0;
                foreach ($map['domainIds'] as $item1) {
                    $model->domainIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['nacosMcpServers'])) {
            if (!empty($map['nacosMcpServers'])) {
                $model->nacosMcpServers = [];
                $n1 = 0;
                foreach ($map['nacosMcpServers'] as $item1) {
                    $model->nacosMcpServers[$n1] = nacosMcpServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        return $model;
    }
}
