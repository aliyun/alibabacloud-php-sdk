<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListProblemSubtotalsRequest extends Model
{
    /**
     * @example 4361a0e1-6747-4834-96ce-0c4840fdB812
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1231
     *
     * @var int
     */
    public $problemId;
    protected $_name = [
        'clientToken' => 'clientToken',
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
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProblemSubtotalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }

        return $model;
    }
}
