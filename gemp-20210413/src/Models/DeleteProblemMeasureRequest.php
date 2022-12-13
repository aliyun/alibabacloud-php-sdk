<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DeleteProblemMeasureRequest extends Model
{
    /**
     * @example 4361a0e1-6747-4834-96ce-0c4840fd3812
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1213
     *
     * @var int
     */
    public $measureId;

    /**
     * @example 2131
     *
     * @var string
     */
    public $problemId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'measureId'   => 'measureId',
        'problemId'   => 'problemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->measureId) {
            $res['measureId'] = $this->measureId;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProblemMeasureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['measureId'])) {
            $model->measureId = $map['measureId'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }

        return $model;
    }
}
