<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdatePushReviewOnOffRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 5ebbc0228123212b59xxxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $trunkMode;
    protected $_name = [
        'organizationId' => 'organizationId',
        'trunkMode'      => 'trunkMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->trunkMode) {
            $res['trunkMode'] = $this->trunkMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePushReviewOnOffRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['trunkMode'])) {
            $model->trunkMode = $map['trunkMode'];
        }

        return $model;
    }
}
