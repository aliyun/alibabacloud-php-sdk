<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedTagsResponseBody;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $policyIds;

    /**
     * @var string[]
     */
    public $softwareIds;

    /**
     * @var string
     */
    public $tagId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'isDefault' => 'IsDefault',
        'name' => 'Name',
        'policyIds' => 'PolicyIds',
        'softwareIds' => 'SoftwareIds',
        'tagId' => 'TagId',
    ];

    public function validate()
    {
        if (\is_array($this->policyIds)) {
            Model::validateArray($this->policyIds);
        }
        if (\is_array($this->softwareIds)) {
            Model::validateArray($this->softwareIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policyIds) {
            if (\is_array($this->policyIds)) {
                $res['PolicyIds'] = [];
                $n1 = 0;
                foreach ($this->policyIds as $item1) {
                    $res['PolicyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->softwareIds) {
            if (\is_array($this->softwareIds)) {
                $res['SoftwareIds'] = [];
                $n1 = 0;
                foreach ($this->softwareIds as $item1) {
                    $res['SoftwareIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = [];
                $n1 = 0;
                foreach ($map['PolicyIds'] as $item1) {
                    $model->policyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SoftwareIds'])) {
            if (!empty($map['SoftwareIds'])) {
                $model->softwareIds = [];
                $n1 = 0;
                foreach ($map['SoftwareIds'] as $item1) {
                    $model->softwareIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
