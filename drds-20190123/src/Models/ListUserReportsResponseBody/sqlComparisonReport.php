<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\ListUserReportsResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\ListUserReportsResponseBody\sqlComparisonReport\executeDetailList;
use AlibabaCloud\Tea\Model;

class sqlComparisonReport extends Model
{
    /**
     * @var int
     */
    public $sqlPassFailNum;

    /**
     * @var string
     */
    public $sqlPassRate;

    /**
     * @var int
     */
    public $sqlPassSuccNum;

    /**
     * @var string
     */
    public $version;

    /**
     * @var executeDetailList
     */
    public $executeDetailList;
    protected $_name = [
        'sqlPassFailNum'    => 'SqlPassFailNum',
        'sqlPassRate'       => 'SqlPassRate',
        'sqlPassSuccNum'    => 'SqlPassSuccNum',
        'version'           => 'Version',
        'executeDetailList' => 'executeDetailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sqlPassFailNum) {
            $res['SqlPassFailNum'] = $this->sqlPassFailNum;
        }
        if (null !== $this->sqlPassRate) {
            $res['SqlPassRate'] = $this->sqlPassRate;
        }
        if (null !== $this->sqlPassSuccNum) {
            $res['SqlPassSuccNum'] = $this->sqlPassSuccNum;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->executeDetailList) {
            $res['executeDetailList'] = null !== $this->executeDetailList ? $this->executeDetailList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sqlComparisonReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SqlPassFailNum'])) {
            $model->sqlPassFailNum = $map['SqlPassFailNum'];
        }
        if (isset($map['SqlPassRate'])) {
            $model->sqlPassRate = $map['SqlPassRate'];
        }
        if (isset($map['SqlPassSuccNum'])) {
            $model->sqlPassSuccNum = $map['SqlPassSuccNum'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['executeDetailList'])) {
            $model->executeDetailList = executeDetailList::fromMap($map['executeDetailList']);
        }

        return $model;
    }
}
