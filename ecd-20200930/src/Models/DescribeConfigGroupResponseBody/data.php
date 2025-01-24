<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConfigGroupResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $bindCount;
    /**
     * @var int[]
     */
    public $bindCountMap;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $productType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bindCount'    => 'BindCount',
        'bindCountMap' => 'BindCountMap',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'name'         => 'Name',
        'productType'  => 'ProductType',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->bindCountMap)) {
            Model::validateArray($this->bindCountMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }

        if (null !== $this->bindCountMap) {
            if (\is_array($this->bindCountMap)) {
                $res['BindCountMap'] = [];
                foreach ($this->bindCountMap as $key1 => $value1) {
                    $res['BindCountMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }

        if (isset($map['BindCountMap'])) {
            if (!empty($map['BindCountMap'])) {
                $model->bindCountMap = [];
                foreach ($map['BindCountMap'] as $key1 => $value1) {
                    $model->bindCountMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
