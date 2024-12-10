<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs;

use AlibabaCloud\Tea\Model;

class inputChannels extends Model
{
    /**
     * @example d-475megosidivjfgfq6
     *
     * @var string
     */
    public $datasetId;

    /**
     * @example oss://test-bucket.oss-cn-hangzhou-internal.aliyuncs.com/path/to/input/channel/
     *
     * @var string
     */
    public $inputUri;

    /**
     * @example model
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'datasetId'   => 'DatasetId',
        'inputUri'    => 'InputUri',
        'name'        => 'Name',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->inputUri) {
            $res['InputUri'] = $this->inputUri;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputChannels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['InputUri'])) {
            $model->inputUri = $map['InputUri'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
