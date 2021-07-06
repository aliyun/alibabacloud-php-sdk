<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLResponseBody;

use AlibabaCloud\Tea\Model;

class preCheckSQLList extends Model
{
    /**
     * @var string
     */
    public $checkSQL;

    /**
     * @var int
     */
    public $affectRows;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $SQLReviewQueryKey;

    /**
     * @var string
     */
    public $sqlReviewStatus;

    /**
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'checkSQL'          => 'CheckSQL',
        'affectRows'        => 'AffectRows',
        'dbId'              => 'DbId',
        'SQLReviewQueryKey' => 'SQLReviewQueryKey',
        'sqlReviewStatus'   => 'SqlReviewStatus',
        'sqlType'           => 'SqlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkSQL) {
            $res['CheckSQL'] = $this->checkSQL;
        }
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->SQLReviewQueryKey) {
            $res['SQLReviewQueryKey'] = $this->SQLReviewQueryKey;
        }
        if (null !== $this->sqlReviewStatus) {
            $res['SqlReviewStatus'] = $this->sqlReviewStatus;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckSQLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckSQL'])) {
            $model->checkSQL = $map['CheckSQL'];
        }
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['SQLReviewQueryKey'])) {
            $model->SQLReviewQueryKey = $map['SQLReviewQueryKey'];
        }
        if (isset($map['SqlReviewStatus'])) {
            $model->sqlReviewStatus = $map['SqlReviewStatus'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        return $model;
    }
}
