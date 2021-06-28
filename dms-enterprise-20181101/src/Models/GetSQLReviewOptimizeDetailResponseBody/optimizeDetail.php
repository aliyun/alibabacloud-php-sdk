<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody\optimizeDetail\qualityResult;
use AlibabaCloud\Tea\Model;

class optimizeDetail extends Model
{
    /**
     * @var string
     */
    public $queryKey;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var qualityResult
     */
    public $qualityResult;
    protected $_name = [
        'queryKey'      => 'QueryKey',
        'instanceId'    => 'InstanceId',
        'dbId'          => 'DbId',
        'sqlType'       => 'SqlType',
        'qualityResult' => 'QualityResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryKey) {
            $res['QueryKey'] = $this->queryKey;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->qualityResult) {
            $res['QualityResult'] = null !== $this->qualityResult ? $this->qualityResult->toMap() : null;
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
        if (isset($map['QueryKey'])) {
            $model->queryKey = $map['QueryKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['QualityResult'])) {
            $model->qualityResult = qualityResult::fromMap($map['QualityResult']);
        }

        return $model;
    }
}
