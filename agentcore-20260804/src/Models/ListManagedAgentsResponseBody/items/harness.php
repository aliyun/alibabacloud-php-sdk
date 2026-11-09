<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsResponseBody\items\harness\configuration;

class harness extends Model
{
    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var int
     */
    public $outdatedInstanceCount;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'configuration' => 'configuration',
        'outdatedInstanceCount' => 'outdatedInstanceCount',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->configuration) {
            $this->configuration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toArray($noStream) : $this->configuration;
        }

        if (null !== $this->outdatedInstanceCount) {
            $res['outdatedInstanceCount'] = $this->outdatedInstanceCount;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['configuration'])) {
            $model->configuration = configuration::fromMap($map['configuration']);
        }

        if (isset($map['outdatedInstanceCount'])) {
            $model->outdatedInstanceCount = $map['outdatedInstanceCount'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
