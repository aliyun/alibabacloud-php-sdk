<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAssetRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAssetRequest\body\chunkConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAssetRequest\body\metadata;

class body extends Model
{
    /**
     * @var chunkConfiguration
     */
    public $chunkConfiguration;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var metadata[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'chunkConfiguration' => 'chunkConfiguration',
        'enabled' => 'enabled',
        'metadata' => 'metadata',
        'name' => 'name',
    ];

    public function validate()
    {
        if (null !== $this->chunkConfiguration) {
            $this->chunkConfiguration->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkConfiguration) {
            $res['chunkConfiguration'] = null !== $this->chunkConfiguration ? $this->chunkConfiguration->toArray($noStream) : $this->chunkConfiguration;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                $n1 = 0;
                foreach ($this->metadata as $item1) {
                    $res['metadata'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['chunkConfiguration'])) {
            $model->chunkConfiguration = chunkConfiguration::fromMap($map['chunkConfiguration']);
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                $n1 = 0;
                foreach ($map['metadata'] as $item1) {
                    $model->metadata[$n1] = metadata::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
