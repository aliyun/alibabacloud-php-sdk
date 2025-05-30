<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models;

use AlibabaCloud\Dara\Model;

class ReadClassNameRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $callerProtocol;

    /**
     * @var string
     */
    public $clientSource;

    /**
     * @var string
     */
    public $cookies;

    /**
     * @var string
     */
    public $srcUrl;

    /**
     * @var string
     */
    public $tenantCode;

    /**
     * @var string
     */
    public $uidType;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName' => 'AppName',
        'bizName' => 'BizName',
        'callerProtocol' => 'CallerProtocol',
        'clientSource' => 'ClientSource',
        'cookies' => 'Cookies',
        'srcUrl' => 'SrcUrl',
        'tenantCode' => 'TenantCode',
        'uidType' => 'UidType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }

        if (null !== $this->callerProtocol) {
            $res['CallerProtocol'] = $this->callerProtocol;
        }

        if (null !== $this->clientSource) {
            $res['ClientSource'] = $this->clientSource;
        }

        if (null !== $this->cookies) {
            $res['Cookies'] = $this->cookies;
        }

        if (null !== $this->srcUrl) {
            $res['SrcUrl'] = $this->srcUrl;
        }

        if (null !== $this->tenantCode) {
            $res['TenantCode'] = $this->tenantCode;
        }

        if (null !== $this->uidType) {
            $res['UidType'] = $this->uidType;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }

        if (isset($map['CallerProtocol'])) {
            $model->callerProtocol = $map['CallerProtocol'];
        }

        if (isset($map['ClientSource'])) {
            $model->clientSource = $map['ClientSource'];
        }

        if (isset($map['Cookies'])) {
            $model->cookies = $map['Cookies'];
        }

        if (isset($map['SrcUrl'])) {
            $model->srcUrl = $map['SrcUrl'];
        }

        if (isset($map['TenantCode'])) {
            $model->tenantCode = $map['TenantCode'];
        }

        if (isset($map['UidType'])) {
            $model->uidType = $map['UidType'];
        }

        return $model;
    }
}
