<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchBodyTraceResponseBody\data;

use AlibabaCloud\Tea\Model;

class matchList extends Model
{
    /**
     * @description 数据库ID
     *
     * @var int
     */
    public $dbId;

    /**
     * @description 人员ID
     *
     * @var int
     */
    public $personId;

    /**
     * @description TraceId
     *
     * @var int
     */
    public $traceId;

    /**
     * @description 匹配度分值，越大越相似，取值范围[-1.0, 1.0]
     *
     * @var float
     */
    public $score;

    /**
     * @description 自定义数据信息
     *
     * @var string
     */
    public $extraData;
    protected $_name = [
        'dbId'      => 'DbId',
        'personId'  => 'PersonId',
        'traceId'   => 'TraceId',
        'score'     => 'Score',
        'extraData' => 'ExtraData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }

        return $model;
    }
}
