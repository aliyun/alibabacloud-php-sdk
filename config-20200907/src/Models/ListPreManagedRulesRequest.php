<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListPreManagedRulesRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the resource.
     *
     * @var string[]
     */
    public $resourceTypes;
    protected $_name = [
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'resourceTypes' => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPreManagedRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = $map['ResourceTypes'];
            }
        }

        return $model;
    }
}
