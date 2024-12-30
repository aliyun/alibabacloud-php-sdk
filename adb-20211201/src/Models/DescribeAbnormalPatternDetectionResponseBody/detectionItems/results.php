<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAbnormalPatternDetectionResponseBody\detectionItems;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example 172.16.133.168
     *
     * @var string
     */
    public $accessIp;

    /**
     * @var string
     */
    public $detail;

    /**
     * @example 7
     *
     * @var int
     */
    public $failedCount;

    /**
     * @example 2803084667741875187
     *
     * @var string
     */
    public $patternId;

    /**
     * @example 72
     *
     * @var int
     */
    public $queryCount;

    /**
     * @var string
     */
    public $relatedMetrics;

    /**
     * @example SELECT `tsid`nFROM `prod_ods_marketing_engine_material`nWHERE `tsid` = ?nLIMIT ?
     *
     * @var string
     */
    public $SQLPattern;

    /**
     * @example dw_student_exam.ods_school_queanal
     *
     * @var string
     */
    public $tables;

    /**
     * @example test
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'accessIp'       => 'AccessIp',
        'detail'         => 'Detail',
        'failedCount'    => 'FailedCount',
        'patternId'      => 'PatternId',
        'queryCount'     => 'QueryCount',
        'relatedMetrics' => 'RelatedMetrics',
        'SQLPattern'     => 'SQLPattern',
        'tables'         => 'Tables',
        'user'           => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['AccessIp'] = $this->accessIp;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->patternId) {
            $res['PatternId'] = $this->patternId;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->relatedMetrics) {
            $res['RelatedMetrics'] = $this->relatedMetrics;
        }
        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessIp'])) {
            $model->accessIp = $map['AccessIp'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['PatternId'])) {
            $model->patternId = $map['PatternId'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['RelatedMetrics'])) {
            $model->relatedMetrics = $map['RelatedMetrics'];
        }
        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
