<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class AddLiveStreamTranscodeRequest extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $encryptParameters;

    /**
     * @var string
     */
    public $lazy;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $template;
    protected $_name = [
        'app' => 'App',
        'domain' => 'Domain',
        'encryptParameters' => 'EncryptParameters',
        'lazy' => 'Lazy',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'template' => 'Template',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->encryptParameters) {
            $res['EncryptParameters'] = $this->encryptParameters;
        }

        if (null !== $this->lazy) {
            $res['Lazy'] = $this->lazy;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->template) {
            $res['Template'] = $this->template;
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
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EncryptParameters'])) {
            $model->encryptParameters = $map['EncryptParameters'];
        }

        if (isset($map['Lazy'])) {
            $model->lazy = $map['Lazy'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
