<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class RefreshAdvisorCostCheckRequest extends Model
{
    /**
     * @var int[]
     */
    public $assumeAliyunIdList;

    /**
     * @var string[]
     */
    public $checkIds;

    /**
     * @var int
     */
    public $checkPlanId;

    /**
     * @var string
     */
    public $product;

    /**
     * @var bool
     */
    public $refreshResource;

    /**
     * @var string[]
     */
    public $resourceIds;
    protected $_name = [
        'assumeAliyunIdList' => 'AssumeAliyunIdList',
        'checkIds' => 'CheckIds',
        'checkPlanId' => 'CheckPlanId',
        'product' => 'Product',
        'refreshResource' => 'RefreshResource',
        'resourceIds' => 'ResourceIds',
    ];

    public function validate()
    {
        if (\is_array($this->assumeAliyunIdList)) {
            Model::validateArray($this->assumeAliyunIdList);
        }
        if (\is_array($this->checkIds)) {
            Model::validateArray($this->checkIds);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeAliyunIdList) {
            if (\is_array($this->assumeAliyunIdList)) {
                $res['AssumeAliyunIdList'] = [];
                $n1 = 0;
                foreach ($this->assumeAliyunIdList as $item1) {
                    $res['AssumeAliyunIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->checkIds) {
            if (\is_array($this->checkIds)) {
                $res['CheckIds'] = [];
                $n1 = 0;
                foreach ($this->checkIds as $item1) {
                    $res['CheckIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->checkPlanId) {
            $res['CheckPlanId'] = $this->checkPlanId;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->refreshResource) {
            $res['RefreshResource'] = $this->refreshResource;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AssumeAliyunIdList'])) {
            if (!empty($map['AssumeAliyunIdList'])) {
                $model->assumeAliyunIdList = [];
                $n1 = 0;
                foreach ($map['AssumeAliyunIdList'] as $item1) {
                    $model->assumeAliyunIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = [];
                $n1 = 0;
                foreach ($map['CheckIds'] as $item1) {
                    $model->checkIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CheckPlanId'])) {
            $model->checkPlanId = $map['CheckPlanId'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['RefreshResource'])) {
            $model->refreshResource = $map['RefreshResource'];
        }

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
