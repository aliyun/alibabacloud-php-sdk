<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Tea\Model;

class outputChannels extends Model
{
    /**
     * @example d-8o0hh35po15ejcdq2p
     *
     * @var string
     */
    public $datasetId;

    /**
     * @example model
     *
     * @var string
     */
    public $name;

    /**
     * @example oss://test-bucket.oss-cn-hangzhou-internal.aliyuncs.com/path/to/output/model/
     *
     * @var string
     */
    public $outputUri;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'name' => 'Name',
        'outputUri' => 'OutputUri',
        'versionName' => 'VersionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputUri) {
            $res['OutputUri'] = $this->outputUri;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputChannels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputUri'])) {
            $model->outputUri = $map['OutputUri'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
