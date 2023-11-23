<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Tea\Model;

class outputChannels extends Model
{
    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputUri;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'name'      => 'Name',
        'outputUri' => 'OutputUri',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputUri) {
            $res['OutputUri'] = $this->outputUri;
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

        return $model;
    }
}
