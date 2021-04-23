<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveStreamTranscodeRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $encryptParameters;

    /**
     * @var string
     */
    public $lazy;
    protected $_name = [
        'ownerId'           => 'OwnerId',
        'domain'            => 'Domain',
        'app'               => 'App',
        'template'          => 'Template',
        'encryptParameters' => 'EncryptParameters',
        'lazy'              => 'Lazy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->encryptParameters) {
            $res['EncryptParameters'] = $this->encryptParameters;
        }
        if (null !== $this->lazy) {
            $res['Lazy'] = $this->lazy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveStreamTranscodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['EncryptParameters'])) {
            $model->encryptParameters = $map['EncryptParameters'];
        }
        if (isset($map['Lazy'])) {
            $model->lazy = $map['Lazy'];
        }

        return $model;
    }
}
