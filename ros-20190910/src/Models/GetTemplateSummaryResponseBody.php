<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponseBody\resourceIdentifierSummaries;
use AlibabaCloud\Tea\Model;

class GetTemplateSummaryResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $resourceTypes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[][]
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var resourceIdentifierSummaries[]
     */
    public $resourceIdentifierSummaries;
    protected $_name = [
        'resourceTypes'               => 'ResourceTypes',
        'description'                 => 'Description',
        'parameters'                  => 'Parameters',
        'requestId'                   => 'RequestId',
        'version'                     => 'Version',
        'metadata'                    => 'Metadata',
        'resourceIdentifierSummaries' => 'ResourceIdentifierSummaries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->resourceIdentifierSummaries) {
            $res['ResourceIdentifierSummaries'] = [];
            if (null !== $this->resourceIdentifierSummaries && \is_array($this->resourceIdentifierSummaries)) {
                $n = 0;
                foreach ($this->resourceIdentifierSummaries as $item) {
                    $res['ResourceIdentifierSummaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = $map['ResourceTypes'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = $map['Parameters'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['ResourceIdentifierSummaries'])) {
            if (!empty($map['ResourceIdentifierSummaries'])) {
                $model->resourceIdentifierSummaries = [];
                $n                                  = 0;
                foreach ($map['ResourceIdentifierSummaries'] as $item) {
                    $model->resourceIdentifierSummaries[$n++] = null !== $item ? resourceIdentifierSummaries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
