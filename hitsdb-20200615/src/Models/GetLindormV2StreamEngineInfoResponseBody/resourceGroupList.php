<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2StreamEngineInfoResponseBody;

use AlibabaCloud\Dara\Model;

class resourceGroupList extends Model
{
    /**
     * @var string[]
     */
    public $jmIpList;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string[]
     */
    public $sgIpList;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $specId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'jmIpList' => 'JmIpList',
        'quantity' => 'Quantity',
        'resourceGroupName' => 'ResourceGroupName',
        'sgIpList' => 'SgIpList',
        'spec' => 'Spec',
        'specId' => 'SpecId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->jmIpList)) {
            Model::validateArray($this->jmIpList);
        }
        if (\is_array($this->sgIpList)) {
            Model::validateArray($this->sgIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jmIpList) {
            if (\is_array($this->jmIpList)) {
                $res['JmIpList'] = [];
                $n1 = 0;
                foreach ($this->jmIpList as $item1) {
                    $res['JmIpList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->sgIpList) {
            if (\is_array($this->sgIpList)) {
                $res['SgIpList'] = [];
                $n1 = 0;
                foreach ($this->sgIpList as $item1) {
                    $res['SgIpList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['JmIpList'])) {
            if (!empty($map['JmIpList'])) {
                $model->jmIpList = [];
                $n1 = 0;
                foreach ($map['JmIpList'] as $item1) {
                    $model->jmIpList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['SgIpList'])) {
            if (!empty($map['SgIpList'])) {
                $model->sgIpList = [];
                $n1 = 0;
                foreach ($map['SgIpList'] as $item1) {
                    $model->sgIpList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
