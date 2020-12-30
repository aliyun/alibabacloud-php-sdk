<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SubmitCleanTaskRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $parentJobId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $expandType;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'dbName'         => 'DbName',
        'parentJobId'    => 'ParentJobId',
        'jobId'          => 'JobId',
        'expandType'     => 'ExpandType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->parentJobId) {
            $res['ParentJobId'] = $this->parentJobId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->expandType) {
            $res['ExpandType'] = $this->expandType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCleanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['ParentJobId'])) {
            $model->parentJobId = $map['ParentJobId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ExpandType'])) {
            $model->expandType = $map['ExpandType'];
        }

        return $model;
    }
}
