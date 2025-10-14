<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListDataIngestionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataIngestionIdsShrink;

    /**
     * @var string
     */
    public $dataIngestionStatus;

    /**
     * @var string
     */
    public $dataIngestionTemplateIdsShrink;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'dataIngestionIdsShrink' => 'DataIngestionIds',
        'dataIngestionStatus' => 'DataIngestionStatus',
        'dataIngestionTemplateIdsShrink' => 'DataIngestionTemplateIds',
        'lang' => 'Lang',
        'productId' => 'ProductId',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataIngestionIdsShrink) {
            $res['DataIngestionIds'] = $this->dataIngestionIdsShrink;
        }

        if (null !== $this->dataIngestionStatus) {
            $res['DataIngestionStatus'] = $this->dataIngestionStatus;
        }

        if (null !== $this->dataIngestionTemplateIdsShrink) {
            $res['DataIngestionTemplateIds'] = $this->dataIngestionTemplateIdsShrink;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['DataIngestionIds'])) {
            $model->dataIngestionIdsShrink = $map['DataIngestionIds'];
        }

        if (isset($map['DataIngestionStatus'])) {
            $model->dataIngestionStatus = $map['DataIngestionStatus'];
        }

        if (isset($map['DataIngestionTemplateIds'])) {
            $model->dataIngestionTemplateIdsShrink = $map['DataIngestionTemplateIds'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
