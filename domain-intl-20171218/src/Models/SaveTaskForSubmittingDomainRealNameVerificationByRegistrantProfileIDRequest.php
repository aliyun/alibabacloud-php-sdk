<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $domainName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName'          => 'DomainName',
        'instanceId'          => 'InstanceId',
        'lang'                => 'Lang',
        'registrantProfileId' => 'RegistrantProfileId',
        'userClientIp'        => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
