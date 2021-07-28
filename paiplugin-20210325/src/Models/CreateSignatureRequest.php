<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models;

use AlibabaCloud\Tea\Model;

class CreateSignatureRequest extends Model
{
    /**
     * @description 签名归属方的三证合一，OSS地址，必须以https开头，使用前需要授权
     *
     * @var string
     */
    public $certificates;

    /**
     * @description 申请说明
     *
     * @var string
     */
    public $description;

    /**
     * @description 签名名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 授权委托书(Power of attorney)， OSS地址，必须以https或oss开头，使用前需要授权，同上
     *
     * @var string
     */
    public $powerOfAttorney;

    /**
     * @description 无需填写
     *
     * @var string
     */
    public $processInstanceID;
    protected $_name = [
        'certificates'      => 'Certificates',
        'description'       => 'Description',
        'name'              => 'Name',
        'powerOfAttorney'   => 'PowerOfAttorney',
        'processInstanceID' => 'ProcessInstanceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificates) {
            $res['Certificates'] = $this->certificates;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->powerOfAttorney) {
            $res['PowerOfAttorney'] = $this->powerOfAttorney;
        }
        if (null !== $this->processInstanceID) {
            $res['ProcessInstanceID'] = $this->processInstanceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSignatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificates'])) {
            $model->certificates = $map['Certificates'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PowerOfAttorney'])) {
            $model->powerOfAttorney = $map['PowerOfAttorney'];
        }
        if (isset($map['ProcessInstanceID'])) {
            $model->processInstanceID = $map['ProcessInstanceID'];
        }

        return $model;
    }
}
