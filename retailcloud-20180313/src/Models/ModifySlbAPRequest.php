<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifySlbAPRequest extends Model
{
    /**
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var int
     */
    public $establishedTimeout;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $realServerPort;

    /**
     * @var int
     */
    public $slbAPId;

    /**
     * @var string
     */
    public $sslCertId;

    /**
     * @var int
     */
    public $stickySession;
    protected $_name = [
        'cookieTimeout'      => 'CookieTimeout',
        'establishedTimeout' => 'EstablishedTimeout',
        'name'               => 'Name',
        'realServerPort'     => 'RealServerPort',
        'slbAPId'            => 'SlbAPId',
        'sslCertId'          => 'SslCertId',
        'stickySession'      => 'StickySession',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->realServerPort) {
            $res['RealServerPort'] = $this->realServerPort;
        }
        if (null !== $this->slbAPId) {
            $res['SlbAPId'] = $this->slbAPId;
        }
        if (null !== $this->sslCertId) {
            $res['SslCertId'] = $this->sslCertId;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySlbAPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RealServerPort'])) {
            $model->realServerPort = $map['RealServerPort'];
        }
        if (isset($map['SlbAPId'])) {
            $model->slbAPId = $map['SlbAPId'];
        }
        if (isset($map['SslCertId'])) {
            $model->sslCertId = $map['SslCertId'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }

        return $model;
    }
}
