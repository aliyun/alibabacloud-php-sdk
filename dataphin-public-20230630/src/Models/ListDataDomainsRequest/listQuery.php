<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataDomainsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @var int[]
     */
    public $bizUnitIdList;

    /**
     * @example test
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitIdList) {
            $res['BizUnitIdList'] = $this->bizUnitIdList;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->parentIdList) {
            $res['ParentIdList'] = $this->parentIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUnitIdList'])) {
            if (!empty($map['BizUnitIdList'])) {
                $model->bizUnitIdList = $map['BizUnitIdList'];
            }
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['ParentIdList'])) {
            if (!empty($map['ParentIdList'])) {
                $model->parentIdList = $map['ParentIdList'];
            }
        }

        return $model;
    }
}
