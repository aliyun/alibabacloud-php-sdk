<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponseBody\resourceIdentifierSummaries;
use AlibabaCloud\Tea\Model;

class GetTemplateSummaryResponseBody extends Model
{
    /**
     * @example No description
     *
     * @var string
     */
    public $description;

    /**
     * @example {"key": "value"}
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var mixed[][]
     */
    public $parameters;

    /**
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6
     *
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
     * @example 2015-09-01
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = $map['Parameters'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = $map['ResourceTypes'];
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
