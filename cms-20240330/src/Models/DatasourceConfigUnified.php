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
    public $regionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'instanceId' => 'instanceId',
        'legacyRaw' => 'legacyRaw',
        'legacyType' => 'legacyType',
        'productCategory' => 'productCategory',
        'regionId' => 'regionId',
        'type' => 'type',
    ];

    public function validate()
    {
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

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
