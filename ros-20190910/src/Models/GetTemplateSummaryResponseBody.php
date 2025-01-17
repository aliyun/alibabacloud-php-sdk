<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponseBody\resourceIdentifierSummaries;

class GetTemplateSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var mixed[]
     */
    public $metadata;
    /**
     * @var mixed[][]
     */
    public $parameters;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var resourceIdentifierSummaries[]
     */
    public $resourceIdentifierSummaries;
    /**
     * @var string[]
     */
    public $resourceTypes;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'description'                 => 'Description',
        'metadata'                    => 'Metadata',
        'parameters'                  => 'Parameters',
        'requestId'                   => 'RequestId',
        'resourceIdentifierSummaries' => 'ResourceIdentifierSummaries',
        'resourceTypes'               => 'ResourceTypes',
        'version'                     => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->resourceIdentifierSummaries)) {
            Model::validateArray($this->resourceIdentifierSummaries);
        }
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1                = 0;
                foreach ($this->parameters as $item1) {
                    if (\is_array($item1)) {
                        $res['Parameters'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Parameters'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceIdentifierSummaries) {
            if (\is_array($this->resourceIdentifierSummaries)) {
                $res['ResourceIdentifierSummaries'] = [];
                $n1                                 = 0;
                foreach ($this->resourceIdentifierSummaries as $item1) {
                    $res['ResourceIdentifierSummaries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['ResourceTypes'] = [];
                $n1                   = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['ResourceTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1                = 0;
                foreach ($map['Parameters'] as $item1) {
                    if (!empty($item1)) {
                        $model->parameters[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->parameters[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceIdentifierSummaries'])) {
            if (!empty($map['ResourceIdentifierSummaries'])) {
                $model->resourceIdentifierSummaries = [];
                $n1                                 = 0;
                foreach ($map['ResourceIdentifierSummaries'] as $item1) {
                    $model->resourceIdentifierSummaries[$n1++] = resourceIdentifierSummaries::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $n1                   = 0;
                foreach ($map['ResourceTypes'] as $item1) {
                    $model->resourceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
