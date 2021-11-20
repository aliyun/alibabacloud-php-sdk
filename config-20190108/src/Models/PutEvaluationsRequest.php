<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class PutEvaluationsRequest extends Model
{
    /**
     * @var string
     */
    public $evaluations;

    /**
     * @var string
     */
    public $resultToken;
    protected $_name = [
        'evaluations' => 'Evaluations',
        'resultToken' => 'ResultToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluations) {
            $res['Evaluations'] = $this->evaluations;
        }
        if (null !== $this->resultToken) {
            $res['ResultToken'] = $this->resultToken;
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
        if (isset($map['Evaluations'])) {
            $model->evaluations = $map['Evaluations'];
        }
        if (isset($map['ResultToken'])) {
            $model->resultToken = $map['ResultToken'];
        }

        return $model;
    }
}
