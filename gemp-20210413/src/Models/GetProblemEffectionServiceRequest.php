<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetProblemEffectionServiceRequest extends Model
{
    /**
     * @description clientToken
     *
     * @example e2d4306a-bf4d-4345-9ae6-158223c85dbd
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 9
     *
     * @var int
     */
    public $effectionServiceId;

    /**
     * @example 46
     *
     * @var int
     */
    public $problemId;
    protected $_name = [
        'clientToken'        => 'clientToken',
        'effectionServiceId' => 'effectionServiceId',
        'problemId'          => 'problemId',
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
        if (null !== $this->effectionServiceId) {
            $res['effectionServiceId'] = $this->effectionServiceId;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProblemEffectionServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['effectionServiceId'])) {
            $model->effectionServiceId = $map['effectionServiceId'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }

        return $model;
    }
}
