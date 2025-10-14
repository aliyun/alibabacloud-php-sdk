<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListDataIngestionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $dataIngestionIds;

    /**
     * @var string
     */
    public $dataIngestionStatus;

    /**
     * @var string[]
     */
    public $dataIngestionTemplateIds;

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
        'dataIngestionIds' => 'DataIngestionIds',
        'dataIngestionStatus' => 'DataIngestionStatus',
        'dataIngestionTemplateIds' => 'DataIngestionTemplateIds',
        'lang' => 'Lang',
        'productId' => 'ProductId',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        if (\is_array($this->dataIngestionIds)) {
            Model::validateArray($this->dataIngestionIds);
        }
        if (\is_array($this->dataIngestionTemplateIds)) {
            Model::validateArray($this->dataIngestionTemplateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataIngestionIds) {
            if (\is_array($this->dataIngestionIds)) {
                $res['DataIngestionIds'] = [];
                $n1 = 0;
                foreach ($this->dataIngestionIds as $item1) {
                    $res['DataIngestionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataIngestionStatus) {
            $res['DataIngestionStatus'] = $this->dataIngestionStatus;
        }

        if (null !== $this->dataIngestionTemplateIds) {
            if (\is_array($this->dataIngestionTemplateIds)) {
                $res['DataIngestionTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->dataIngestionTemplateIds as $item1) {
                    $res['DataIngestionTemplateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DataIngestionIds'])) {
                $model->dataIngestionIds = [];
                $n1 = 0;
                foreach ($map['DataIngestionIds'] as $item1) {
                    $model->dataIngestionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataIngestionStatus'])) {
            $model->dataIngestionStatus = $map['DataIngestionStatus'];
        }

        if (isset($map['DataIngestionTemplateIds'])) {
            if (!empty($map['DataIngestionTemplateIds'])) {
                $model->dataIngestionTemplateIds = [];
                $n1 = 0;
                foreach ($map['DataIngestionTemplateIds'] as $item1) {
                    $model->dataIngestionTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
