<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class PutEvaluationsRequest extends Model
{
    /**
     * @var string
     */
    public $resultToken;

    /**
     * @var string
     */
    public $evaluations;
    protected $_name = [
        'resultToken' => 'ResultToken',
        'evaluations' => 'Evaluations',
    ];

    public function validate()
    {
        Model::validateRequired('resultToken', $this->resultToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultToken) {
            $res['ResultToken'] = $this->resultToken;
        }
        if (null !== $this->evaluations) {
            $res['Evaluations'] = $this->evaluations;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEvaluationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultToken'])) {
            $model->resultToken = $map['ResultToken'];
        }
        if (isset($map['Evaluations'])) {
            $model->evaluations = $map['Evaluations'];
        }

        return $model;
    }
}
