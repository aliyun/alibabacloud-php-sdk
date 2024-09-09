<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description The filter condition that is used to query instances. If you do not configure this parameter, all instances are queried.
     *
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $filter;

    /**
     * @description The page number.
     *
     * If you set this parameter to a value smaller than 1, the system uses 1 as the value. If you set this parameter to a value greater than 100000000, the system uses 100000000 as the value.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * If you set this parameter to a value smaller than 10, the system uses 10 as the value. If you set this parameter to a value greater than 200, the system uses 200 as the value.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfmx7caj******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The primary edition of the instance.
     *
     * Valid values:
     *
     *   standard: Standard Edition
     *   ultimate: Enterprise Platinum Edition
     *   professional: Professional Edition
     *
     * @var string[]
     */
    public $seriesCodes;

    /**
     * @description The tags that are used to filter instances.
     *
     * @example [{"key": "rmq-test", "value": "test"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'filter'          => 'filter',
        'pageNumber'      => 'pageNumber',
        'pageSize'        => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
        'seriesCodes'     => 'seriesCodes',
        'tags'            => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->seriesCodes) {
            $res['seriesCodes'] = $this->seriesCodes;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['seriesCodes'])) {
            if (!empty($map['seriesCodes'])) {
                $model->seriesCodes = $map['seriesCodes'];
            }
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}
