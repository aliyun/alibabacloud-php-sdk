<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDataServiceApisRequest extends Model
{
    /**
     * @description The ID of the tenant.
     *
     * @var string
     */
    public $apiNameKeyword;

    /**
     * @description The keyword in the name of the API. The keyword can be used to search for the API whose name contains the keyword.
     *
     * @example /test/
     *
     * @var string
     */
    public $apiPathKeyword;

    /**
     * @description The keyword in the path of the API. The keyword can be used to search for the API whose path contains the keyword.
     *
     * @example 12345
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The operation that you want to perform. Set the value to **ListDataServiceApis**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries to return on each page. Default value: 10. A maximum of 100 entries can be returned on each page.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the workspace.
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
