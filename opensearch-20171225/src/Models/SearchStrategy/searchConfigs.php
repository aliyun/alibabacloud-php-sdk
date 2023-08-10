<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\SearchStrategy;

use AlibabaCloud\Tea\Model;

class searchConfigs extends Model
{
    /**
     * @var string
     */
    public $firstRankName;

    /**
     * @var int
     */
    public $mergeProportion;

    /**
     * @example keyword: 关键字查询 vector: 向量查询
     *
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $secondRankName;
    protected $_name = [
        'firstRankName'   => 'firstRankName',
        'mergeProportion' => 'mergeProportion',
        'queryType'       => 'queryType',
        'secondRankName'  => 'secondRankName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstRankName) {
            $res['firstRankName'] = $this->firstRankName;
        }
        if (null !== $this->mergeProportion) {
            $res['mergeProportion'] = $this->mergeProportion;
        }
        if (null !== $this->queryType) {
            $res['queryType'] = $this->queryType;
        }
        if (null !== $this->secondRankName) {
            $res['secondRankName'] = $this->secondRankName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['firstRankName'])) {
            $model->firstRankName = $map['firstRankName'];
        }
        if (isset($map['mergeProportion'])) {
            $model->mergeProportion = $map['mergeProportion'];
        }
        if (isset($map['queryType'])) {
            $model->queryType = $map['queryType'];
        }
        if (isset($map['secondRankName'])) {
            $model->secondRankName = $map['secondRankName'];
        }

        return $model;
    }
}
