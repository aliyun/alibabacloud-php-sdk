<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyBindingsShrinkRequest extends Model
{
    /**
     * @description The data sources that you want to bind to the backup policy.
     *
     * @var string
     */
    public $policyBindingListShrink;

    /**
     * @description The ID of the backup policy.
     *
     * @example po-000************8ep
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'policyBindingListShrink' => 'PolicyBindingList',
        'policyId'                => 'PolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyBindingListShrink) {
            $res['PolicyBindingList'] = $this->policyBindingListShrink;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyBindingsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyBindingList'])) {
            $model->policyBindingListShrink = $map['PolicyBindingList'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
