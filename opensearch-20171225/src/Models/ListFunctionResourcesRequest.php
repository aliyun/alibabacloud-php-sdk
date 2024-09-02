<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionResourcesRequest extends Model
{
    /**
     * @description The output level.
     *
     * Valid values:
     *
     *   simple
     *   normal
     *   detail
     *
     * @example detail
     *
     * @var string
     */
    public $output;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the resource.
     *
     * Valid values:
     *
     *   feature_generator
     *
     * <!-- -->
     *
     *   raw_file
     *
     * <!-- -->
     * @example feature_generator
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'output'       => 'output',
        'pageNumber'   => 'pageNumber',
        'pageSize'     => 'pageSize',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
