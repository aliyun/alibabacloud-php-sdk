<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDataServiceApisRequest extends Model
{
    /**
     * @description The keyword in API names. The keyword is used to search for the APIs whose names contain the keyword.
     *
     * @var string
     */
    public $apiNameKeyword;

    /**
     * @description The keyword in API paths. The keyword is used to search for the APIs whose paths contain the keyword.
     *
     * @example /test/
     *
     * @var string
     */
    public $apiPathKeyword;

    /**
     * @description The ID of the Alibaba Cloud account used by the creator of the APIs. The ID is used to search for the APIs created by the creator.
     *
     * @example 12345
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The workspace ID.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The tenant ID. To obtain the tenant ID, perform the following steps: Log on to the [DataWorks console](https://workbench.data.aliyun.com/console). Find your workspace and go to the DataStudio page. On the DataStudio page, click the logon username in the upper-right corner and click User Info in the Menu section.
     *
     * @example 10001
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiNameKeyword' => 'ApiNameKeyword',
        'apiPathKeyword' => 'ApiPathKeyword',
        'creatorId'      => 'CreatorId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'projectId'      => 'ProjectId',
        'tenantId'       => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiNameKeyword) {
            $res['ApiNameKeyword'] = $this->apiNameKeyword;
        }
        if (null !== $this->apiPathKeyword) {
            $res['ApiPathKeyword'] = $this->apiPathKeyword;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataServiceApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiNameKeyword'])) {
            $model->apiNameKeyword = $map['ApiNameKeyword'];
        }
        if (isset($map['ApiPathKeyword'])) {
            $model->apiPathKeyword = $map['ApiPathKeyword'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
