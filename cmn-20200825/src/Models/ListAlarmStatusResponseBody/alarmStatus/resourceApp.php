<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class resourceApp extends Model
{
    /**
     * @example app-0ijhb6yujk
     *
     * @var string
     */
    public $appId;

    /**
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @example CMN-A01
     *
     * @var string
     */
    public $securityDomain;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId'          => 'AppId',
        'domain'         => 'Domain',
        'port'           => 'Port',
        'securityDomain' => 'SecurityDomain',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceApp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
