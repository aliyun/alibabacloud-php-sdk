<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DatasourceConfigUnified extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $legacyRaw;

    /**
     * @var string
     */
    public $legacyType;

    /**
     * @var string
     */
    public $productCategory;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var Stores[]
     */
    public $stores;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'instanceId' => 'instanceId',
        'legacyRaw' => 'legacyRaw',
        'legacyType' => 'legacyType',
        'productCategory' => 'productCategory',
        'project' => 'project',
        'regionId' => 'regionId',
        'stores' => 'stores',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->stores)) {
            Model::validateArray($this->stores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->legacyRaw) {
            $res['legacyRaw'] = $this->legacyRaw;
        }

        if (null !== $this->legacyType) {
            $res['legacyType'] = $this->legacyType;
        }

        if (null !== $this->productCategory) {
            $res['productCategory'] = $this->productCategory;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->stores) {
            if (\is_array($this->stores)) {
                $res['stores'] = [];
                $n1 = 0;
                foreach ($this->stores as $item1) {
                    $res['stores'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['legacyRaw'])) {
            $model->legacyRaw = $map['legacyRaw'];
        }

        if (isset($map['legacyType'])) {
            $model->legacyType = $map['legacyType'];
        }

        if (isset($map['productCategory'])) {
            $model->productCategory = $map['productCategory'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['stores'])) {
            if (!empty($map['stores'])) {
                $model->stores = [];
                $n1 = 0;
                foreach ($map['stores'] as $item1) {
                    $model->stores[$n1] = Stores::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
