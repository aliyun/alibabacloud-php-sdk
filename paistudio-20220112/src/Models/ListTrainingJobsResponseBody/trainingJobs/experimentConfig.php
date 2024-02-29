<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs;

use AlibabaCloud\Tea\Model;

class experimentConfig extends Model
{
    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $experimentName;
    protected $_name = [
        'experimentId'   => 'ExperimentId',
        'experimentName' => 'ExperimentName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->experimentName) {
            $res['ExperimentName'] = $this->experimentName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return experimentConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['ExperimentName'])) {
            $model->experimentName = $map['ExperimentName'];
        }

        return $model;
    }
}
