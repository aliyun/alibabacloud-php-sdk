<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class DeleteMultimodalDatasetRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $datasetId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'datasetId' => 'DatasetId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        return $model;
    }
}
