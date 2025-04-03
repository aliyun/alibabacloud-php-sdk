<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class PutEvaluationsRequest extends Model
{
    /**
     * @var bool
     */
    public $deleteMode;

    /**
     * @var string
     */
    public $evaluations;

    /**
     * @var string
     */
    public $resultToken;
    protected $_name = [
        'deleteMode' => 'DeleteMode',
        'evaluations' => 'Evaluations',
        'resultToken' => 'ResultToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteMode) {
            $res['DeleteMode'] = $this->deleteMode;
        }

        if (null !== $this->evaluations) {
            $res['Evaluations'] = $this->evaluations;
        }

        if (null !== $this->resultToken) {
            $res['ResultToken'] = $this->resultToken;
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
        if (isset($map['DeleteMode'])) {
            $model->deleteMode = $map['DeleteMode'];
        }

        if (isset($map['Evaluations'])) {
            $model->evaluations = $map['Evaluations'];
        }

        if (isset($map['ResultToken'])) {
            $model->resultToken = $map['ResultToken'];
        }

        return $model;
    }
}
