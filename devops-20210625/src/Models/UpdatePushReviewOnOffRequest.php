<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class UpdatePushReviewOnOffRequest extends Model
{
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var bool
     */
    public $trunkMode;
    protected $_name = [
        'organizationId' => 'organizationId',
        'trunkMode'      => 'trunkMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
