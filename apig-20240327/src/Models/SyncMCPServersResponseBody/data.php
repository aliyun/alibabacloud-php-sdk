<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersResponseBody\data\failedMcpServers;
use AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersResponseBody\data\succeedMcpServers;

class data extends Model
{
    /**
     * @var failedMcpServers[]
     */
    public $failedMcpServers;

    /**
     * @var succeedMcpServers[]
     */
    public $succeedMcpServers;
    protected $_name = [
        'failedMcpServers' => 'failedMcpServers',
        'succeedMcpServers' => 'succeedMcpServers',
    ];

    public function validate()
    {
        if (\is_array($this->failedMcpServers)) {
            Model::validateArray($this->failedMcpServers);
        }
        if (\is_array($this->succeedMcpServers)) {
            Model::validateArray($this->succeedMcpServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedMcpServers) {
            if (\is_array($this->failedMcpServers)) {
                $res['failedMcpServers'] = [];
                $n1 = 0;
                foreach ($this->failedMcpServers as $item1) {
                    $res['failedMcpServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->succeedMcpServers) {
            if (\is_array($this->succeedMcpServers)) {
                $res['succeedMcpServers'] = [];
                $n1 = 0;
                foreach ($this->succeedMcpServers as $item1) {
                    $res['succeedMcpServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['failedMcpServers'])) {
            if (!empty($map['failedMcpServers'])) {
                $model->failedMcpServers = [];
                $n1 = 0;
                foreach ($map['failedMcpServers'] as $item1) {
                    $model->failedMcpServers[$n1] = failedMcpServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['succeedMcpServers'])) {
            if (!empty($map['succeedMcpServers'])) {
                $model->succeedMcpServers = [];
                $n1 = 0;
                foreach ($map['succeedMcpServers'] as $item1) {
                    $model->succeedMcpServers[$n1] = succeedMcpServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
