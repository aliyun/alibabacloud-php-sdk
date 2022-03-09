<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class DatasetPublishPublishRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var bool
     */
    public $overwriteLatest;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'aliyunJwt'       => 'AliyunJwt',
        'datasetId'       => 'DatasetId',
        'overwriteLatest' => 'OverwriteLatest',
        'projectId'       => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->overwriteLatest) {
            $res['OverwriteLatest'] = $this->overwriteLatest;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetPublishPublishRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['OverwriteLatest'])) {
            $model->overwriteLatest = $map['OverwriteLatest'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
