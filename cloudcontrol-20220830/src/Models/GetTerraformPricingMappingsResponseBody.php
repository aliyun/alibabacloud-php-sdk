<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetTerraformPricingMappingsResponseBody\mappings;

class GetTerraformPricingMappingsResponseBody extends Model
{
    /**
     * @var string
     */
    public $mappingVersion;

    /**
     * @var mappings[]
     */
    public $mappings;

    /**
     * @var string[]
     */
    public $missingResourceTypes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string[]
     */
    public $unsupportedResourceTypes;
    protected $_name = [
        'mappingVersion' => 'mappingVersion',
        'mappings' => 'mappings',
        'missingResourceTypes' => 'missingResourceTypes',
        'requestId' => 'requestId',
        'schemaVersion' => 'schemaVersion',
        'unsupportedResourceTypes' => 'unsupportedResourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->mappings)) {
            Model::validateArray($this->mappings);
        }
        if (\is_array($this->missingResourceTypes)) {
            Model::validateArray($this->missingResourceTypes);
        }
        if (\is_array($this->unsupportedResourceTypes)) {
            Model::validateArray($this->unsupportedResourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mappingVersion) {
            $res['mappingVersion'] = $this->mappingVersion;
        }

        if (null !== $this->mappings) {
            if (\is_array($this->mappings)) {
                $res['mappings'] = [];
                $n1 = 0;
                foreach ($this->mappings as $item1) {
                    $res['mappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->missingResourceTypes) {
            if (\is_array($this->missingResourceTypes)) {
                $res['missingResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->missingResourceTypes as $item1) {
                    $res['missingResourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->unsupportedResourceTypes) {
            if (\is_array($this->unsupportedResourceTypes)) {
                $res['unsupportedResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->unsupportedResourceTypes as $item1) {
                    $res['unsupportedResourceTypes'][$n1] = $item1;
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
        if (isset($map['mappingVersion'])) {
            $model->mappingVersion = $map['mappingVersion'];
        }

        if (isset($map['mappings'])) {
            if (!empty($map['mappings'])) {
                $model->mappings = [];
                $n1 = 0;
                foreach ($map['mappings'] as $item1) {
                    $model->mappings[$n1] = mappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['missingResourceTypes'])) {
            if (!empty($map['missingResourceTypes'])) {
                $model->missingResourceTypes = [];
                $n1 = 0;
                foreach ($map['missingResourceTypes'] as $item1) {
                    $model->missingResourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['unsupportedResourceTypes'])) {
            if (!empty($map['unsupportedResourceTypes'])) {
                $model->unsupportedResourceTypes = [];
                $n1 = 0;
                foreach ($map['unsupportedResourceTypes'] as $item1) {
                    $model->unsupportedResourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
