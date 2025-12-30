<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class CreateMultimodalDatasetRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $datasetDescription;

    /**
     * @var string
     */
    public $datasetName;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'datasetDescription' => 'DatasetDescription',
        'datasetName' => 'DatasetName',
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

        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
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

        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        return $model;
    }
}
