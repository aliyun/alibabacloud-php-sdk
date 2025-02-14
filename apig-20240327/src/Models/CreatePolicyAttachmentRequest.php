<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreatePolicyAttachmentRequest extends Model
{
    /**
     * @var string
     */
    public $attachResourceId;
    /**
     * @var string
     */
    public $attachResourceType;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $gatewayId;
    /**
     * @var string
     */
    public $policyId;
    protected $_name = [
        'attachResourceId'   => 'attachResourceId',
        'attachResourceType' => 'attachResourceType',
        'environmentId'      => 'environmentId',
        'gatewayId'          => 'gatewayId',
        'policyId'           => 'policyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachResourceId) {
            $res['attachResourceId'] = $this->attachResourceId;
        }

        if (null !== $this->attachResourceType) {
            $res['attachResourceType'] = $this->attachResourceType;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
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
        if (isset($map['attachResourceId'])) {
            $model->attachResourceId = $map['attachResourceId'];
        }

        if (isset($map['attachResourceType'])) {
            $model->attachResourceType = $map['attachResourceType'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        return $model;
    }
}
