<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataDomainsRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var int[]
     */
    public $bizUnitIdList;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int[]
     */
    public $parentIdList;
    protected $_name = [
        'bizUnitIdList' => 'BizUnitIdList',
        'keyword' => 'Keyword',
        'parentIdList' => 'ParentIdList',
    ];

    public function validate()
    {
        if (\is_array($this->bizUnitIdList)) {
            Model::validateArray($this->bizUnitIdList);
        }
        if (\is_array($this->parentIdList)) {
            Model::validateArray($this->parentIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitIdList) {
            if (\is_array($this->bizUnitIdList)) {
                $res['BizUnitIdList'] = [];
                $n1 = 0;
                foreach ($this->bizUnitIdList as $item1) {
                    $res['BizUnitIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->parentIdList) {
            if (\is_array($this->parentIdList)) {
                $res['ParentIdList'] = [];
                $n1 = 0;
                foreach ($this->parentIdList as $item1) {
                    $res['ParentIdList'][$n1++] = $item1;
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
        if (isset($map['BizUnitIdList'])) {
            if (!empty($map['BizUnitIdList'])) {
                $model->bizUnitIdList = [];
                $n1 = 0;
                foreach ($map['BizUnitIdList'] as $item1) {
                    $model->bizUnitIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['ParentIdList'])) {
            if (!empty($map['ParentIdList'])) {
                $model->parentIdList = [];
                $n1 = 0;
                foreach ($map['ParentIdList'] as $item1) {
                    $model->parentIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
