<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class CreateExternalCACertificateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiPassthroughShrink;

    /**
     * @var string
     */
    public $csr;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $validity;
    protected $_name = [
        'apiPassthroughShrink' => 'ApiPassthrough',
        'csr' => 'Csr',
        'instanceId' => 'InstanceId',
        'validity' => 'Validity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiPassthroughShrink) {
            $res['ApiPassthrough'] = $this->apiPassthroughShrink;
        }

        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->validity) {
            $res['Validity'] = $this->validity;
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
        if (isset($map['ApiPassthrough'])) {
            $model->apiPassthroughShrink = $map['ApiPassthrough'];
        }

        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Validity'])) {
            $model->validity = $map['Validity'];
        }

        return $model;
    }
}
