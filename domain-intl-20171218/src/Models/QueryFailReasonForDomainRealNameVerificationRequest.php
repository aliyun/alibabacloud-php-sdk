<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class QueryFailReasonForDomainRealNameVerificationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $realNameVerificationAction;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName'                 => 'DomainName',
        'lang'                       => 'Lang',
        'realNameVerificationAction' => 'RealNameVerificationAction',
        'userClientIp'               => 'UserClientIp',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->realNameVerificationAction) {
            $res['RealNameVerificationAction'] = $this->realNameVerificationAction;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFailReasonForDomainRealNameVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RealNameVerificationAction'])) {
            $model->realNameVerificationAction = $map['RealNameVerificationAction'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
