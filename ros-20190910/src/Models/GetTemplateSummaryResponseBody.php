<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponseBody\resourceIdentifierSummaries;
use AlibabaCloud\Tea\Model;

class GetTemplateSummaryResponseBody extends Model
{
    /**
     * @description The description of the stack template.
     *
     * @example No description
     *
     * @var string
     */
    public $description;

    /**
     * @description The metadata that is defined in the template.
     *
     * @example {"key": "value"}
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @description The declarations of the parameters in the template.
     *
     * @var mixed[][]
     */
    public $parameters;

    /**
     * @description The request ID.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource identifier summaries.\
     * A summary describes the resource that you want to import and the properties that are used to identify the resource during the import. For example, VpcId is an identifier property of ALIYUN::ECS::VPC.
     * @var resourceIdentifierSummaries[]
     */
    public $resourceIdentifierSummaries;

    /**
     * @description All resource types that are used in the template.
     *
     * @var string[]
     */
    public $resourceTypes;

    /**
     * @description The version of the template.
     *
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
