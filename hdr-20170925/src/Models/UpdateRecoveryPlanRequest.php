<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class UpdateRecoveryPlanRequest extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $content;

    /**
     * @example test-1
     *
     * @var string
     */
    public $name;

    /**
     * @example rp-xxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $recoveryPlanId;
    protected $_name = [
        'content'        => 'Content',
        'name'           => 'Name',
        'recoveryPlanId' => 'RecoveryPlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRecoveryPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }

        return $model;
    }
}
