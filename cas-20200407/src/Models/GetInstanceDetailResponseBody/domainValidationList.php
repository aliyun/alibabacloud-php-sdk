<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\GetInstanceDetailResponseBody;

use AlibabaCloud\Dara\Model;

class domainValidationList extends Model
{
    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $rootDomain;

    /**
     * @var string
     */
    public $validationKey;

    /**
     * @var string
     */
    public $validationType;

    /**
     * @var string
     */
    public $validationValue;
    protected $_name = [
        'cname' => 'Cname',
        'domain' => 'Domain',
        'rootDomain' => 'RootDomain',
        'validationKey' => 'ValidationKey',
        'validationType' => 'ValidationType',
        'validationValue' => 'ValidationValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->rootDomain) {
            $res['RootDomain'] = $this->rootDomain;
        }

        if (null !== $this->validationKey) {
            $res['ValidationKey'] = $this->validationKey;
        }

        if (null !== $this->validationType) {
            $res['ValidationType'] = $this->validationType;
        }

        if (null !== $this->validationValue) {
            $res['ValidationValue'] = $this->validationValue;
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
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['RootDomain'])) {
            $model->rootDomain = $map['RootDomain'];
        }

        if (isset($map['ValidationKey'])) {
            $model->validationKey = $map['ValidationKey'];
        }

        if (isset($map['ValidationType'])) {
            $model->validationType = $map['ValidationType'];
        }

        if (isset($map['ValidationValue'])) {
            $model->validationValue = $map['ValidationValue'];
        }

        return $model;
    }
}
