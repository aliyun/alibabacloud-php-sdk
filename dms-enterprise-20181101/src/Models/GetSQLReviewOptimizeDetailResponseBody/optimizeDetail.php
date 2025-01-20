<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody\optimizeDetail\qualityResult;

class optimizeDetail extends Model
{
    /**
     * @var int
     */
    public $dbId;
    /**
     * @var int
     */
    public $instanceId;
    /**
     * @var qualityResult
     */
    public $qualityResult;
    /**
     * @var string
     */
    public $queryKey;
    /**
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
        if (null !== $this->qualityResult) {
            $this->qualityResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->qualityResult) {
            $res['QualityResult'] = null !== $this->qualityResult ? $this->qualityResult->toArray($noStream) : $this->qualityResult;
        }

        if (null !== $this->queryKey) {
            $res['QueryKey'] = $this->queryKey;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
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
