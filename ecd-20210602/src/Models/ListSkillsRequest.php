<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models;

use AlibabaCloud\Dara\Model;

class ListSkillsRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $skillChannel;

    /**
     * @var string[]
     */
    public $skillIds;

    /**
     * @var string
     */
    public $supplierType;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'skillChannel' => 'SkillChannel',
        'skillIds' => 'SkillIds',
        'supplierType' => 'SupplierType',
    ];

    public function validate()
    {
        if (\is_array($this->skillIds)) {
            Model::validateArray($this->skillIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->skillChannel) {
            $res['SkillChannel'] = $this->skillChannel;
        }

        if (null !== $this->skillIds) {
            if (\is_array($this->skillIds)) {
                $res['SkillIds'] = [];
                $n1 = 0;
                foreach ($this->skillIds as $item1) {
                    $res['SkillIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supplierType) {
            $res['SupplierType'] = $this->supplierType;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SkillChannel'])) {
            $model->skillChannel = $map['SkillChannel'];
        }

        if (isset($map['SkillIds'])) {
            if (!empty($map['SkillIds'])) {
                $model->skillIds = [];
                $n1 = 0;
                foreach ($map['SkillIds'] as $item1) {
                    $model->skillIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SupplierType'])) {
            $model->supplierType = $map['SupplierType'];
        }

        return $model;
    }
}
