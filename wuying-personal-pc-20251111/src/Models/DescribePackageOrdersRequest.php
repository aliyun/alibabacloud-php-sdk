<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;

class DescribePackageOrdersRequest extends Model
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
     * @var string[]
     */
    public $desktopIdList;

    /**
     * @var string[]
     */
    public $orderIdList;

    /**
     * @var string[]
     */
    public $orderStatusList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $productTypeList;

    /**
     * @var string[]
     */
    public $resourceIdList;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'currentPage' => 'CurrentPage',
        'desktopIdList' => 'DesktopIdList',
        'orderIdList' => 'OrderIdList',
        'orderStatusList' => 'OrderStatusList',
        'pageSize' => 'PageSize',
        'productTypeList' => 'ProductTypeList',
        'resourceIdList' => 'ResourceIdList',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopIdList)) {
            Model::validateArray($this->desktopIdList);
        }
        if (\is_array($this->orderIdList)) {
            Model::validateArray($this->orderIdList);
        }
        if (\is_array($this->orderStatusList)) {
            Model::validateArray($this->orderStatusList);
        }
        if (\is_array($this->productTypeList)) {
            Model::validateArray($this->productTypeList);
        }
        if (\is_array($this->resourceIdList)) {
            Model::validateArray($this->resourceIdList);
        }
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

        if (null !== $this->desktopIdList) {
            if (\is_array($this->desktopIdList)) {
                $res['DesktopIdList'] = [];
                $n1 = 0;
                foreach ($this->desktopIdList as $item1) {
                    $res['DesktopIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderIdList) {
            if (\is_array($this->orderIdList)) {
                $res['OrderIdList'] = [];
                $n1 = 0;
                foreach ($this->orderIdList as $item1) {
                    $res['OrderIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderStatusList) {
            if (\is_array($this->orderStatusList)) {
                $res['OrderStatusList'] = [];
                $n1 = 0;
                foreach ($this->orderStatusList as $item1) {
                    $res['OrderStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productTypeList) {
            if (\is_array($this->productTypeList)) {
                $res['ProductTypeList'] = [];
                $n1 = 0;
                foreach ($this->productTypeList as $item1) {
                    $res['ProductTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceIdList) {
            if (\is_array($this->resourceIdList)) {
                $res['ResourceIdList'] = [];
                $n1 = 0;
                foreach ($this->resourceIdList as $item1) {
                    $res['ResourceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DesktopIdList'])) {
                $model->desktopIdList = [];
                $n1 = 0;
                foreach ($map['DesktopIdList'] as $item1) {
                    $model->desktopIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderIdList'])) {
            if (!empty($map['OrderIdList'])) {
                $model->orderIdList = [];
                $n1 = 0;
                foreach ($map['OrderIdList'] as $item1) {
                    $model->orderIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderStatusList'])) {
            if (!empty($map['OrderStatusList'])) {
                $model->orderStatusList = [];
                $n1 = 0;
                foreach ($map['OrderStatusList'] as $item1) {
                    $model->orderStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductTypeList'])) {
            if (!empty($map['ProductTypeList'])) {
                $model->productTypeList = [];
                $n1 = 0;
                foreach ($map['ProductTypeList'] as $item1) {
                    $model->productTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceIdList'])) {
            if (!empty($map['ResourceIdList'])) {
                $model->resourceIdList = [];
                $n1 = 0;
                foreach ($map['ResourceIdList'] as $item1) {
                    $model->resourceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
