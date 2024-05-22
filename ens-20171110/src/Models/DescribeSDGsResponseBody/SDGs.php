<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponseBody\SDGs\avaliableRegionIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponseBody\SDGs\deployedInstanceIds;
use AlibabaCloud\Tea\Model;

class SDGs extends Model
{
    /**
     * @description The IDs of available edge nodes.
     *
     * @var avaliableRegionIds[]
     */
    public $avaliableRegionIds;

    /**
     * @description The ID of the instance on which the SDG is created.
     *
     * @example aic-5x20dyeos****
     *
     * @var string
     */
    public $creationInstanceId;

    /**
     * @description The ID of the node on which the SDG is created.
     *
     * @example cn-hangzhou-26
     *
     * @var string
     */
    public $creationRegionId;

    /**
     * @description The time when the SDG was first created.
     *
     * @example 2023-02-27 15:07:21
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The deployment information.
     *
     * @var deployedInstanceIds[]
     */
    public $deployedInstanceIds;

    /**
     * @description The description of the SDG.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the source SDG from which you want to create an SDG. The value of this parameter is the value of the **FromSDGId** parameter that you need to specify when you call the [CreateSDG](https://help.aliyun.com/document_detail/608128.html) operation.
     *
     * @example sdg-xxxxx
     *
     * @var string
     */
    public $parentSDGId;

    /**
     * @description The ID of the SDG.
     *
     * @example sdg-30e1fdba7196bc****
     *
     * @var string
     */
    public $SDGId;

    /**
     * @description The size of the SDG. Unit: GB.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the SDG creation. Valid values:
     *
     *   **sdg_making**
     *   **sdg_saving**
     *   **failed**
     *   **success**
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the SDG was last updated.
     *
     * @example 2023-02-27 16:04:39
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'avaliableRegionIds'  => 'AvaliableRegionIds',
        'creationInstanceId'  => 'CreationInstanceId',
        'creationRegionId'    => 'CreationRegionId',
        'creationTime'        => 'CreationTime',
        'deployedInstanceIds' => 'DeployedInstanceIds',
        'description'         => 'Description',
        'parentSDGId'         => 'ParentSDGId',
        'SDGId'               => 'SDGId',
        'size'                => 'Size',
        'status'              => 'Status',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avaliableRegionIds) {
            $res['AvaliableRegionIds'] = [];
            if (null !== $this->avaliableRegionIds && \is_array($this->avaliableRegionIds)) {
                $n = 0;
                foreach ($this->avaliableRegionIds as $item) {
                    $res['AvaliableRegionIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->creationInstanceId) {
            $res['CreationInstanceId'] = $this->creationInstanceId;
        }
        if (null !== $this->creationRegionId) {
            $res['CreationRegionId'] = $this->creationRegionId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deployedInstanceIds) {
            $res['DeployedInstanceIds'] = [];
            if (null !== $this->deployedInstanceIds && \is_array($this->deployedInstanceIds)) {
                $n = 0;
                foreach ($this->deployedInstanceIds as $item) {
                    $res['DeployedInstanceIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->parentSDGId) {
            $res['ParentSDGId'] = $this->parentSDGId;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SDGs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvaliableRegionIds'])) {
            if (!empty($map['AvaliableRegionIds'])) {
                $model->avaliableRegionIds = [];
                $n                         = 0;
                foreach ($map['AvaliableRegionIds'] as $item) {
                    $model->avaliableRegionIds[$n++] = null !== $item ? avaliableRegionIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreationInstanceId'])) {
            $model->creationInstanceId = $map['CreationInstanceId'];
        }
        if (isset($map['CreationRegionId'])) {
            $model->creationRegionId = $map['CreationRegionId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeployedInstanceIds'])) {
            if (!empty($map['DeployedInstanceIds'])) {
                $model->deployedInstanceIds = [];
                $n                          = 0;
                foreach ($map['DeployedInstanceIds'] as $item) {
                    $model->deployedInstanceIds[$n++] = null !== $item ? deployedInstanceIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ParentSDGId'])) {
            $model->parentSDGId = $map['ParentSDGId'];
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
