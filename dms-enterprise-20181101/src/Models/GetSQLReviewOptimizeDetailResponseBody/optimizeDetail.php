<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody\optimizeDetail\qualityResult;
use AlibabaCloud\Tea\Model;

class optimizeDetail extends Model
{
    /**
     * @description The ID of the database.
     *
     * @example 111222
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The ID of the instance to which the database belongs.
     *
     * @example 123321
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The quality of the SQL statement.
     *
     * @var qualityResult
     */
    public $qualityResult;

    /**
     * @description The key that is used to query the details of optimization suggestions.
     *
     * @example a57e54ec5433475ea3082d882fdb****
     *
     * @var string
     */
    public $queryKey;

    /**
     * @description The type of the SQL statement. Valid values: DELETE, UPDATE, and ALTER_TABLE.
     *
     * @example UPDATE
     *
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'dbId'          => 'DbId',
        'instanceId'    => 'InstanceId',
        'qualityResult' => 'QualityResult',
        'queryKey'      => 'QueryKey',
        'sqlType'       => 'SqlType',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->qualityResult) {
            $res['QualityResult'] = null !== $this->qualityResult ? $this->qualityResult->toMap() : null;
        }
        if (null !== $this->queryKey) {
            $res['QueryKey'] = $this->queryKey;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return optimizeDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QualityResult'])) {
            $model->qualityResult = qualityResult::fromMap($map['QualityResult']);
        }
        if (isset($map['QueryKey'])) {
            $model->queryKey = $map['QueryKey'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        return $model;
    }
}
