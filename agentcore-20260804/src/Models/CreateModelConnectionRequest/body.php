<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateModelConnectionRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string[]
     */
    public $apiKeys;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $providerType;
    protected $_name = [
        'apiKeys' => 'apiKeys',
        'description' => 'description',
        'endpoint' => 'endpoint',
        'name' => 'name',
        'protocol' => 'protocol',
        'providerType' => 'providerType',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['apiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['apiKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->providerType) {
            $res['providerType'] = $this->providerType;
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
        if (isset($map['apiKeys'])) {
            if (!empty($map['apiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['apiKeys'] as $item1) {
                    $model->apiKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['providerType'])) {
            $model->providerType = $map['providerType'];
        }

        return $model;
    }
}
