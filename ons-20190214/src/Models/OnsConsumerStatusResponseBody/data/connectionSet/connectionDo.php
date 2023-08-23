<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\connectionSet;

use AlibabaCloud\Tea\Model;

class connectionDo extends Model
{
    /**
     * @description The IP address and port number of the consumer instance.
     *
     * @example 30.5.121.**
     *
     * @var string
     */
    public $clientAddr;

    /**
     * @description The ID of the consumer instance.
     *
     * @example 30.5.121.**@25560#-1999745829#-1737591554#458773089270275
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The programming language in which the consumer is developed.
     *
     * @example JAVA
     *
     * @var string
     */
    public $language;

    /**
     * @description The private or public IP address of the host.
     *
     * @example 42.120.74.**
     *
     * @var string
     */
    public $remoteIP;

    /**
     * @description The version of the consumer client.
     *
     * @example V4_3_6_SNAPSHOT
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'clientAddr' => 'ClientAddr',
        'clientId'   => 'ClientId',
        'language'   => 'Language',
        'remoteIP'   => 'RemoteIP',
        'version'    => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return connectionDo
     */
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
