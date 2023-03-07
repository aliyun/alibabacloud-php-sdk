<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SaveDataServiceApiTestResultRequest extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var bool
     */
    public $autoGenerate;

    /**
     * @var string
     */
    public $failResultSample;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $resultSample;
    protected $_name = [
        'apiId'            => 'ApiId',
        'autoGenerate'     => 'AutoGenerate',
        'failResultSample' => 'FailResultSample',
        'projectId'        => 'ProjectId',
        'resultSample'     => 'ResultSample',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->autoGenerate) {
            $res['AutoGenerate'] = $this->autoGenerate;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveDataServiceApiTestResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AutoGenerate'])) {
            $model->autoGenerate = $map['AutoGenerate'];
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }

        return $model;
    }
}
