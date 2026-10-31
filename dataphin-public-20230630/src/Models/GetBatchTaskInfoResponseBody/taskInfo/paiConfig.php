<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo;

use AlibabaCloud\Dara\Model;

class paiConfig extends Model
{
    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $workSpaceId;
    protected $_name = [
        'experimentId' => 'ExperimentId',
        'region' => 'Region',
        'workSpaceId' => 'WorkSpaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->workSpaceId) {
            $res['WorkSpaceId'] = $this->workSpaceId;
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
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['WorkSpaceId'])) {
            $model->workSpaceId = $map['WorkSpaceId'];
        }

        return $model;
    }
}
