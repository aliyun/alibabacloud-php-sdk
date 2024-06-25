<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class AttachToPolicyShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ipPortProtocolListShrink;

    /**
     * @description This parameter is required.
     *
     * @example cd8b4d70-e4e0-413a-b390-e71d********
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'ipPortProtocolListShrink' => 'IpPortProtocolList',
        'policyId'                 => 'PolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipPortProtocolListShrink) {
            $res['IpPortProtocolList'] = $this->ipPortProtocolListShrink;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachToPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpPortProtocolList'])) {
            $model->ipPortProtocolListShrink = $map['IpPortProtocolList'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
