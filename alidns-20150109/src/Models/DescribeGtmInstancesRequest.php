<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstancesRequest extends Model
{
    /**
     * @description The keyword that you use for query. Exact match is supported by instance ID or instance name.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language in which you want the values of some response parameters to be returned. These response parameters support multiple languages.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether additional information is required. Default value: **false**.
     *
     * @example false
     *
     * @var bool
     */
    public $needDetailAttributes;

    /**
     * @description The page number to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return per page.
     *
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
        'keyword'              => 'Keyword',
        'lang'                 => 'Lang',
        'needDetailAttributes' => 'NeedDetailAttributes',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'resourceGroupId'      => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->needDetailAttributes) {
            $res['NeedDetailAttributes'] = $this->needDetailAttributes;
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
     * @return DescribeGtmInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NeedDetailAttributes'])) {
            $model->needDetailAttributes = $map['NeedDetailAttributes'];
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
