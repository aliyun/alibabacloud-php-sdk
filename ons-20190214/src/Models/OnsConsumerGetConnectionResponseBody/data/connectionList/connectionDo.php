<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerGetConnectionResponseBody\data\connectionList;

use AlibabaCloud\Tea\Model;

class connectionDo extends Model
{
    /**
     * @description The IP address and port number of the consumer client.
     *
     * @example 30.5.121.**
     *
     * @var string
     */
    public $clientAddr;

    /**
     * @description The ID of the consumer client.
     *
     * @example 30.5.121.**@24813#-1999745829#-1737591554#453111174894656
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The programming language in which the consumer application was developed.
     *
     * @example JAVA
     *
     * @var string
     */
    public $language;

    /**
     * @description The version of the consumer client.
     *
     * @example V4_3_6
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'clientAddr' => 'ClientAddr',
        'clientId'   => 'ClientId',
        'language'   => 'Language',
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
