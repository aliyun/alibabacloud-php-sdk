<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnUserDomainsByFuncRequest extends Model
{
    /**
     * @description The ID of the feature.
     *
     * This parameter is required.
     * @example 7
     *
     * @var int
     */
    public $funcId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * Valid values: **1** to **100000**.
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of domain names to return on each page. Default value: **20**.
     *
     * Valid values: **1** to **50**.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-xxxxx
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'funcId'          => 'FuncId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->funcId) {
            $res['FuncId'] = $this->funcId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnUserDomainsByFuncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FuncId'])) {
            $model->funcId = $map['FuncId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
