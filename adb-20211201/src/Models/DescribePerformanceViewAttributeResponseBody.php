<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewAttributeResponseBody\viewDetail;
use AlibabaCloud\Tea\Model;

class DescribePerformanceViewAttributeResponseBody extends Model
{
    /**
     * @description The details about the access denial.
     *
     * >  This parameter is returned only if Resource Access Management (RAM) permission verification failed.
     * @example {
     * "PolicyType": "AccountLevelIdentityBasedPolicy",
     * "AuthPrincipalOwnerId": "1*****************7",
     * "AuthPrincipalType": "SubUser",
     * "AuthPrincipalDisplayName": "2***************9",
     * }
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description The type of the view.
     *
     * @example Basic
     *
     * @var string
     */
    public $createFromViewType;

    /**
     * @description The cluster ID.
     *
     * >  You can call the [DescribeDBClusters](https://help.aliyun.com/document_detail/129857.html) operation to query the information about all AnalyticDB for MySQL clusters within a region, including cluster IDs.
     * @example amv-bp198m028ih55xxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to populate the names of the metrics in the original monitoring view when you view the monitoring view. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $fillOriginViewKeys;

    /**
     * @description The request ID.
     *
     * @example E031AABF-BD56-5966-A063-4283EF18DB45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the monitoring view.
     *
     * @var viewDetail
     */
    public $viewDetail;

    /**
     * @description The name of the view.
     *
     * @example Basic
     *
     * @var string
     */
    public $viewName;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'createFromViewType' => 'CreateFromViewType',
        'DBClusterId'        => 'DBClusterId',
        'fillOriginViewKeys' => 'FillOriginViewKeys',
        'requestId'          => 'RequestId',
        'viewDetail'         => 'ViewDetail',
        'viewName'           => 'ViewName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->createFromViewType) {
            $res['CreateFromViewType'] = $this->createFromViewType;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->fillOriginViewKeys) {
            $res['FillOriginViewKeys'] = $this->fillOriginViewKeys;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->viewDetail) {
            $res['ViewDetail'] = null !== $this->viewDetail ? $this->viewDetail->toMap() : null;
        }
        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePerformanceViewAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['CreateFromViewType'])) {
            $model->createFromViewType = $map['CreateFromViewType'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['FillOriginViewKeys'])) {
            $model->fillOriginViewKeys = $map['FillOriginViewKeys'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ViewDetail'])) {
            $model->viewDetail = viewDetail::fromMap($map['ViewDetail']);
        }
        if (isset($map['ViewName'])) {
            $model->viewName = $map['ViewName'];
        }

        return $model;
    }
}
