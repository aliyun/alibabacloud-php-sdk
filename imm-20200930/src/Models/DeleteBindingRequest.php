<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteBindingRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'projectName' => 'ProjectName',
        'URI' => 'URI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
