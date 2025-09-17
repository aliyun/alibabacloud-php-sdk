<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody\resourceTypes\handlers;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponseBody\resourceTypes\info;

class resourceTypes extends Model
{
    /**
     * @var string[]
     */
    public $createOnlyProperties;

    /**
     * @var string[]
     */
    public $deleteOnlyProperties;

    /**
     * @var string[]
     */
    public $filterProperties;

    /**
     * @var string[]
     */
    public $getOnlyProperties;

    /**
     * @var string[]
     */
    public $getResponseProperties;

    /**
     * @var handlers
     */
    public $handlers;

    /**
     * @var info
     */
    public $info;

    /**
     * @var string[]
     */
    public $listOnlyProperties;

    /**
     * @var string[]
     */
    public $listResponseProperties;

    /**
     * @var string
     */
    public $primaryIdentifier;

    /**
     * @var string
     */
    public $product;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string[]
     */
    public $publicProperties;

    /**
     * @var string[]
     */
    public $readOnlyProperties;

    /**
     * @var string[]
     */
    public $required;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $sensitiveInfoProperties;

    /**
     * @var string[]
     */
    public $updateOnlyProperties;

    /**
     * @var string[]
     */
    public $updateTypeProperties;
    protected $_name = [
        'createOnlyProperties' => 'createOnlyProperties',
        'deleteOnlyProperties' => 'deleteOnlyProperties',
        'filterProperties' => 'filterProperties',
        'getOnlyProperties' => 'getOnlyProperties',
        'getResponseProperties' => 'getResponseProperties',
        'handlers' => 'handlers',
        'info' => 'info',
        'listOnlyProperties' => 'listOnlyProperties',
        'listResponseProperties' => 'listResponseProperties',
        'primaryIdentifier' => 'primaryIdentifier',
        'product' => 'product',
        'properties' => 'properties',
        'publicProperties' => 'publicProperties',
        'readOnlyProperties' => 'readOnlyProperties',
        'required' => 'required',
        'resourceType' => 'resourceType',
        'sensitiveInfoProperties' => 'sensitiveInfoProperties',
        'updateOnlyProperties' => 'updateOnlyProperties',
        'updateTypeProperties' => 'updateTypeProperties',
    ];

    public function validate()
    {
        if (\is_array($this->createOnlyProperties)) {
            Model::validateArray($this->createOnlyProperties);
        }
        if (\is_array($this->deleteOnlyProperties)) {
            Model::validateArray($this->deleteOnlyProperties);
        }
        if (\is_array($this->filterProperties)) {
            Model::validateArray($this->filterProperties);
        }
        if (\is_array($this->getOnlyProperties)) {
            Model::validateArray($this->getOnlyProperties);
        }
        if (\is_array($this->getResponseProperties)) {
            Model::validateArray($this->getResponseProperties);
        }
        if (null !== $this->handlers) {
            $this->handlers->validate();
        }
        if (null !== $this->info) {
            $this->info->validate();
        }
        if (\is_array($this->listOnlyProperties)) {
            Model::validateArray($this->listOnlyProperties);
        }
        if (\is_array($this->listResponseProperties)) {
            Model::validateArray($this->listResponseProperties);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (\is_array($this->publicProperties)) {
            Model::validateArray($this->publicProperties);
        }
        if (\is_array($this->readOnlyProperties)) {
            Model::validateArray($this->readOnlyProperties);
        }
        if (\is_array($this->required)) {
            Model::validateArray($this->required);
        }
        if (\is_array($this->sensitiveInfoProperties)) {
            Model::validateArray($this->sensitiveInfoProperties);
        }
        if (\is_array($this->updateOnlyProperties)) {
            Model::validateArray($this->updateOnlyProperties);
        }
        if (\is_array($this->updateTypeProperties)) {
            Model::validateArray($this->updateTypeProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createOnlyProperties) {
            if (\is_array($this->createOnlyProperties)) {
                $res['createOnlyProperties'] = [];
                $n1 = 0;
                foreach ($this->createOnlyProperties as $item1) {
                    $res['createOnlyProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deleteOnlyProperties) {
            if (\is_array($this->deleteOnlyProperties)) {
                $res['deleteOnlyProperties'] = [];
                $n1 = 0;
                foreach ($this->deleteOnlyProperties as $item1) {
                    $res['deleteOnlyProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filterProperties) {
            if (\is_array($this->filterProperties)) {
                $res['filterProperties'] = [];
                $n1 = 0;
                foreach ($this->filterProperties as $item1) {
                    $res['filterProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->getOnlyProperties) {
            if (\is_array($this->getOnlyProperties)) {
                $res['getOnlyProperties'] = [];
                $n1 = 0;
                foreach ($this->getOnlyProperties as $item1) {
                    $res['getOnlyProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->getResponseProperties) {
            if (\is_array($this->getResponseProperties)) {
                $res['getResponseProperties'] = [];
                $n1 = 0;
                foreach ($this->getResponseProperties as $item1) {
                    $res['getResponseProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->handlers) {
            $res['handlers'] = null !== $this->handlers ? $this->handlers->toArray($noStream) : $this->handlers;
        }

        if (null !== $this->info) {
            $res['info'] = null !== $this->info ? $this->info->toArray($noStream) : $this->info;
        }

        if (null !== $this->listOnlyProperties) {
            if (\is_array($this->listOnlyProperties)) {
                $res['listOnlyProperties'] = [];
                $n1 = 0;
                foreach ($this->listOnlyProperties as $item1) {
                    $res['listOnlyProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->listResponseProperties) {
            if (\is_array($this->listResponseProperties)) {
                $res['listResponseProperties'] = [];
                $n1 = 0;
                foreach ($this->listResponseProperties as $item1) {
                    $res['listResponseProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->primaryIdentifier) {
            $res['primaryIdentifier'] = $this->primaryIdentifier;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->publicProperties) {
            if (\is_array($this->publicProperties)) {
                $res['publicProperties'] = [];
                $n1 = 0;
                foreach ($this->publicProperties as $item1) {
                    $res['publicProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->readOnlyProperties) {
            if (\is_array($this->readOnlyProperties)) {
                $res['readOnlyProperties'] = [];
                $n1 = 0;
                foreach ($this->readOnlyProperties as $item1) {
                    $res['readOnlyProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->required) {
            if (\is_array($this->required)) {
                $res['required'] = [];
                $n1 = 0;
                foreach ($this->required as $item1) {
                    $res['required'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->sensitiveInfoProperties) {
            if (\is_array($this->sensitiveInfoProperties)) {
                $res['sensitiveInfoProperties'] = [];
                $n1 = 0;
                foreach ($this->sensitiveInfoProperties as $item1) {
                    $res['sensitiveInfoProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateOnlyProperties) {
            if (\is_array($this->updateOnlyProperties)) {
                $res['updateOnlyProperties'] = [];
                $n1 = 0;
                foreach ($this->updateOnlyProperties as $item1) {
                    $res['updateOnlyProperties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTypeProperties) {
            if (\is_array($this->updateTypeProperties)) {
                $res['updateTypeProperties'] = [];
                $n1 = 0;
                foreach ($this->updateTypeProperties as $item1) {
                    $res['updateTypeProperties'][$n1] = $item1;
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
        if (isset($map['createOnlyProperties'])) {
            if (!empty($map['createOnlyProperties'])) {
                $model->createOnlyProperties = [];
                $n1 = 0;
                foreach ($map['createOnlyProperties'] as $item1) {
                    $model->createOnlyProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['deleteOnlyProperties'])) {
            if (!empty($map['deleteOnlyProperties'])) {
                $model->deleteOnlyProperties = [];
                $n1 = 0;
                foreach ($map['deleteOnlyProperties'] as $item1) {
                    $model->deleteOnlyProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['filterProperties'])) {
            if (!empty($map['filterProperties'])) {
                $model->filterProperties = [];
                $n1 = 0;
                foreach ($map['filterProperties'] as $item1) {
                    $model->filterProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['getOnlyProperties'])) {
            if (!empty($map['getOnlyProperties'])) {
                $model->getOnlyProperties = [];
                $n1 = 0;
                foreach ($map['getOnlyProperties'] as $item1) {
                    $model->getOnlyProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['getResponseProperties'])) {
            if (!empty($map['getResponseProperties'])) {
                $model->getResponseProperties = [];
                $n1 = 0;
                foreach ($map['getResponseProperties'] as $item1) {
                    $model->getResponseProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['handlers'])) {
            $model->handlers = handlers::fromMap($map['handlers']);
        }

        if (isset($map['info'])) {
            $model->info = info::fromMap($map['info']);
        }

        if (isset($map['listOnlyProperties'])) {
            if (!empty($map['listOnlyProperties'])) {
                $model->listOnlyProperties = [];
                $n1 = 0;
                foreach ($map['listOnlyProperties'] as $item1) {
                    $model->listOnlyProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['listResponseProperties'])) {
            if (!empty($map['listResponseProperties'])) {
                $model->listResponseProperties = [];
                $n1 = 0;
                foreach ($map['listResponseProperties'] as $item1) {
                    $model->listResponseProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['primaryIdentifier'])) {
            $model->primaryIdentifier = $map['primaryIdentifier'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                foreach ($map['properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['publicProperties'])) {
            if (!empty($map['publicProperties'])) {
                $model->publicProperties = [];
                $n1 = 0;
                foreach ($map['publicProperties'] as $item1) {
                    $model->publicProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['readOnlyProperties'])) {
            if (!empty($map['readOnlyProperties'])) {
                $model->readOnlyProperties = [];
                $n1 = 0;
                foreach ($map['readOnlyProperties'] as $item1) {
                    $model->readOnlyProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['required'])) {
            if (!empty($map['required'])) {
                $model->required = [];
                $n1 = 0;
                foreach ($map['required'] as $item1) {
                    $model->required[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['sensitiveInfoProperties'])) {
            if (!empty($map['sensitiveInfoProperties'])) {
                $model->sensitiveInfoProperties = [];
                $n1 = 0;
                foreach ($map['sensitiveInfoProperties'] as $item1) {
                    $model->sensitiveInfoProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updateOnlyProperties'])) {
            if (!empty($map['updateOnlyProperties'])) {
                $model->updateOnlyProperties = [];
                $n1 = 0;
                foreach ($map['updateOnlyProperties'] as $item1) {
                    $model->updateOnlyProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTypeProperties'])) {
            if (!empty($map['updateTypeProperties'])) {
                $model->updateTypeProperties = [];
                $n1 = 0;
                foreach ($map['updateTypeProperties'] as $item1) {
                    $model->updateTypeProperties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
