<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountResourcesResponseBody\cloudAccountResources;

use AlibabaCloud\Dara\Model;

class cloudAccountResourceMeta extends Model
{
    /**
     * @var string
     */
    public $camPolicyDocument;

    /**
     * @var string
     */
    public $camPolicyType;

    /**
     * @var string
     */
    public $iamPolicyDocument;

    /**
     * @var string
     */
    public $iamPolicyType;

    /**
     * @var string
     */
    public $ramPolicyDocument;

    /**
     * @var string
     */
    public $ramPolicyType;
    protected $_name = [
        'camPolicyDocument' => 'CamPolicyDocument',
        'camPolicyType' => 'CamPolicyType',
        'iamPolicyDocument' => 'IamPolicyDocument',
        'iamPolicyType' => 'IamPolicyType',
        'ramPolicyDocument' => 'RamPolicyDocument',
        'ramPolicyType' => 'RamPolicyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->camPolicyDocument) {
            $res['CamPolicyDocument'] = $this->camPolicyDocument;
        }

        if (null !== $this->camPolicyType) {
            $res['CamPolicyType'] = $this->camPolicyType;
        }

        if (null !== $this->iamPolicyDocument) {
            $res['IamPolicyDocument'] = $this->iamPolicyDocument;
        }

        if (null !== $this->iamPolicyType) {
            $res['IamPolicyType'] = $this->iamPolicyType;
        }

        if (null !== $this->ramPolicyDocument) {
            $res['RamPolicyDocument'] = $this->ramPolicyDocument;
        }

        if (null !== $this->ramPolicyType) {
            $res['RamPolicyType'] = $this->ramPolicyType;
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
        if (isset($map['CamPolicyDocument'])) {
            $model->camPolicyDocument = $map['CamPolicyDocument'];
        }

        if (isset($map['CamPolicyType'])) {
            $model->camPolicyType = $map['CamPolicyType'];
        }

        if (isset($map['IamPolicyDocument'])) {
            $model->iamPolicyDocument = $map['IamPolicyDocument'];
        }

        if (isset($map['IamPolicyType'])) {
            $model->iamPolicyType = $map['IamPolicyType'];
        }

        if (isset($map['RamPolicyDocument'])) {
            $model->ramPolicyDocument = $map['RamPolicyDocument'];
        }

        if (isset($map['RamPolicyType'])) {
            $model->ramPolicyType = $map['RamPolicyType'];
        }

        return $model;
    }
}
