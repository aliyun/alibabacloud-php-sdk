<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewAttributeResponseBody\viewDetail;

class DescribePerformanceViewAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;
    /**
     * @var string
     */
    public $createFromViewType;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var bool
     */
    public $fillOriginViewKeys;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var viewDetail
     */
    public $viewDetail;
    /**
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
        if (null !== $this->viewDetail) {
            $this->viewDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ViewDetail'] = null !== $this->viewDetail ? $this->viewDetail->toArray($noStream) : $this->viewDetail;
        }

        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
