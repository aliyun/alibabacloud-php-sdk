<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\connectionSet;

use AlibabaCloud\Tea\Model;

class connectionDo extends Model
{
    /**
     * @var string
     */
    public $remoteIP;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $clientAddr;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $clientId;
    protected $_name = [
        'remoteIP'   => 'RemoteIP',
        'version'    => 'Version',
        'clientAddr' => 'ClientAddr',
        'language'   => 'Language',
        'clientId'   => 'ClientId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remoteIP) {
            $res['RemoteIP'] = $this->remoteIP;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->clientAddr) {
            $res['ClientAddr'] = $this->clientAddr;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemoteIP'])) {
            $model->remoteIP = $map['RemoteIP'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ClientAddr'])) {
            $model->clientAddr = $map['ClientAddr'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        return $model;
    }
}
