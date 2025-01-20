<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLResponseBody;

use AlibabaCloud\Dara\Model;

class preCheckSQLList extends Model
{
    /**
     * @var int
     */
    public $affectRows;
    /**
     * @var string
     */
    public $checkSQL;
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
    /**
     * @var string
     */
    public $tableNames;
    protected $_name = [
        'affectRows'        => 'AffectRows',
        'checkSQL'          => 'CheckSQL',
        'dbId'              => 'DbId',
        'SQLReviewQueryKey' => 'SQLReviewQueryKey',
        'sqlReviewStatus'   => 'SqlReviewStatus',
        'sqlType'           => 'SqlType',
        'tableNames'        => 'TableNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }

        if (null !== $this->checkSQL) {
            $res['CheckSQL'] = $this->checkSQL;
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

        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
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
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }

        if (isset($map['CheckSQL'])) {
            $model->checkSQL = $map['CheckSQL'];
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

        if (isset($map['TableNames'])) {
            $model->tableNames = $map['TableNames'];
        }

        return $model;
    }
}
