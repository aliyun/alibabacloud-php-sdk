<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListSyncMCPServerResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $domainIds;

    /**
     * @var string[]
     */
    public $mcpServers;
    protected $_name = [
        'domainIds' => 'domainIds',
        'mcpServers' => 'mcpServers',
    ];

    public function validate()
    {
        if (\is_array($this->domainIds)) {
            Model::validateArray($this->domainIds);
        }
        if (\is_array($this->mcpServers)) {
            Model::validateArray($this->mcpServers);
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

        if (null !== $this->mcpServers) {
            if (\is_array($this->mcpServers)) {
                $res['mcpServers'] = [];
                $n1 = 0;
                foreach ($this->mcpServers as $item1) {
                    $res['mcpServers'][$n1] = $item1;
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

        if (isset($map['mcpServers'])) {
            if (!empty($map['mcpServers'])) {
                $model->mcpServers = [];
                $n1 = 0;
                foreach ($map['mcpServers'] as $item1) {
                    $model->mcpServers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
