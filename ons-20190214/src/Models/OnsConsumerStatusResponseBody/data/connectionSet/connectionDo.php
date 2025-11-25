<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\connectionSet;

use AlibabaCloud\Dara\Model;

class connectionDo extends Model
{
    /**
     * @var string
     */
    public $clientAddr;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $remoteIP;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'clientAddr' => 'ClientAddr',
        'clientId' => 'ClientId',
        'language' => 'Language',
        'remoteIP' => 'RemoteIP',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientAddr) {
            $res['ClientAddr'] = $this->clientAddr;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->remoteIP) {
            $res['RemoteIP'] = $this->remoteIP;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ClientAddr'])) {
            $model->clientAddr = $map['ClientAddr'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['RemoteIP'])) {
            $model->remoteIP = $map['RemoteIP'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
