<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeleteAIDBClusterDatasetResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataServiceId;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataServiceId' => 'DataServiceId',
        'datasetId' => 'DatasetId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataServiceId) {
            $res['DataServiceId'] = $this->dataServiceId;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DataServiceId'])) {
            $model->dataServiceId = $map['DataServiceId'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
