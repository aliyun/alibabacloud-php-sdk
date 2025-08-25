<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acc\V20240402\Models\CreateImageCacheShrinkRequest;

use AlibabaCloud\Dara\Model;

class imageRegistryCredentials extends Model
{
    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $server;

    /**
     * @var bool
     */
    public $skipCertVerification;

    /**
     * @var bool
     */
    public $usePlainHttp;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'password' => 'Password',
        'server' => 'Server',
        'skipCertVerification' => 'SkipCertVerification',
        'usePlainHttp' => 'UsePlainHttp',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }

        if (null !== $this->skipCertVerification) {
            $res['SkipCertVerification'] = $this->skipCertVerification;
        }

        if (null !== $this->usePlainHttp) {
            $res['UsePlainHttp'] = $this->usePlainHttp;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }

        if (isset($map['SkipCertVerification'])) {
            $model->skipCertVerification = $map['SkipCertVerification'];
        }

        if (isset($map['UsePlainHttp'])) {
            $model->usePlainHttp = $map['UsePlainHttp'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
