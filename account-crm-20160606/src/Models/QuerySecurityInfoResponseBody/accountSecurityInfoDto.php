<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QuerySecurityInfoResponseBody;

use AlibabaCloud\Dara\Model;

class accountSecurityInfoDto extends Model
{
    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nationalityCode;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $profileType;

    /**
     * @var string
     */
    public $securityEmail;

    /**
     * @var string
     */
    public $securityMobile;
    protected $_name = [
        'aliyunId' => 'AliyunId',
        'name' => 'Name',
        'nationalityCode' => 'NationalityCode',
        'pk' => 'Pk',
        'profileType' => 'ProfileType',
        'securityEmail' => 'SecurityEmail',
        'securityMobile' => 'SecurityMobile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nationalityCode) {
            $res['NationalityCode'] = $this->nationalityCode;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->profileType) {
            $res['ProfileType'] = $this->profileType;
        }

        if (null !== $this->securityEmail) {
            $res['SecurityEmail'] = $this->securityEmail;
        }

        if (null !== $this->securityMobile) {
            $res['SecurityMobile'] = $this->securityMobile;
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
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NationalityCode'])) {
            $model->nationalityCode = $map['NationalityCode'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['ProfileType'])) {
            $model->profileType = $map['ProfileType'];
        }

        if (isset($map['SecurityEmail'])) {
            $model->securityEmail = $map['SecurityEmail'];
        }

        if (isset($map['SecurityMobile'])) {
            $model->securityMobile = $map['SecurityMobile'];
        }

        return $model;
    }
}
