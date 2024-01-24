<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SubmitCleanTaskRequest extends Model
{
    /**
     * @description The name of the database that is scaled out.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drds*********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The scale-out type. Valid values:
     *
     *   smooth_expand: smooth scale-out
     *   hot_expand: hot-spot scale-out
     *
     * @example smooth_expand
     *
     * @var string
     */
    public $expandType;

    /**
     * @description The job ID of the scale-out task. The value of this parameter is the same as that of the ParentJobId parameter.
     *
     * @example 123
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the scale-out task. This parameter is returned if you send a request for the smooth scale-out task.
     *
     * @example 123
     *
     * @var string
     */
    public $parentJobId;
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'expandType'     => 'ExpandType',
        'jobId'          => 'JobId',
        'parentJobId'    => 'ParentJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->expandType) {
            $res['ExpandType'] = $this->expandType;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->parentJobId) {
            $res['ParentJobId'] = $this->parentJobId;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['ExpandType'])) {
            $model->expandType = $map['ExpandType'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ParentJobId'])) {
            $model->parentJobId = $map['ParentJobId'];
        }

        return $model;
    }
}
