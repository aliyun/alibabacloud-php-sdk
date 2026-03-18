<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;

class AttachToPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ipPortProtocolListShrink;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $portVersion;
    protected $_name = [
        'ipPortProtocolListShrink' => 'IpPortProtocolList',
        'policyId' => 'PolicyId',
        'portVersion' => 'PortVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipPortProtocolListShrink) {
            $res['IpPortProtocolList'] = $this->ipPortProtocolListShrink;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->portVersion) {
            $res['PortVersion'] = $this->portVersion;
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
        if (isset($map['IpPortProtocolList'])) {
            $model->ipPortProtocolListShrink = $map['IpPortProtocolList'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PortVersion'])) {
            $model->portVersion = $map['PortVersion'];
        }

        return $model;
    }
}
