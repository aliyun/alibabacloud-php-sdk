<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;

class DescribePackageOrdersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $desktopIdListShrink;

    /**
     * @var string
     */
    public $orderIdListShrink;

    /**
     * @var string
     */
    public $orderStatusListShrink;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productTypeListShrink;

    /**
     * @var string
     */
    public $resourceIdListShrink;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'currentPage' => 'CurrentPage',
        'desktopIdListShrink' => 'DesktopIdList',
        'orderIdListShrink' => 'OrderIdList',
        'orderStatusListShrink' => 'OrderStatusList',
        'pageSize' => 'PageSize',
        'productTypeListShrink' => 'ProductTypeList',
        'resourceIdListShrink' => 'ResourceIdList',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->desktopIdListShrink) {
            $res['DesktopIdList'] = $this->desktopIdListShrink;
        }

        if (null !== $this->orderIdListShrink) {
            $res['OrderIdList'] = $this->orderIdListShrink;
        }

        if (null !== $this->orderStatusListShrink) {
            $res['OrderStatusList'] = $this->orderStatusListShrink;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productTypeListShrink) {
            $res['ProductTypeList'] = $this->productTypeListShrink;
        }

        if (null !== $this->resourceIdListShrink) {
            $res['ResourceIdList'] = $this->resourceIdListShrink;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DesktopIdList'])) {
            $model->desktopIdListShrink = $map['DesktopIdList'];
        }

        if (isset($map['OrderIdList'])) {
            $model->orderIdListShrink = $map['OrderIdList'];
        }

        if (isset($map['OrderStatusList'])) {
            $model->orderStatusListShrink = $map['OrderStatusList'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductTypeList'])) {
            $model->productTypeListShrink = $map['ProductTypeList'];
        }

        if (isset($map['ResourceIdList'])) {
            $model->resourceIdListShrink = $map['ResourceIdList'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
