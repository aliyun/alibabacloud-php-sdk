<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetTokenRequest extends Model
{
    /**
     * @example 60
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description This parameter is required.
     *
     * @example traincclrt205dcs
     *
     * @var string
     */
    public $trainingJobId;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'trainingJobId' => 'TrainingJobId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->trainingJobId) {
            $res['TrainingJobId'] = $this->trainingJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['TrainingJobId'])) {
            $model->trainingJobId = $map['TrainingJobId'];
        }

        return $model;
    }
}
