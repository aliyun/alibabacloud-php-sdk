<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class StartSmartContractJobRequest extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $sourceOpt;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'jobId'      => 'JobId',
        'jobName'    => 'JobName',
        'sourceOpt'  => 'SourceOpt',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->sourceOpt) {
            $res['SourceOpt'] = $this->sourceOpt;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartSmartContractJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['SourceOpt'])) {
            $model->sourceOpt = $map['SourceOpt'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
