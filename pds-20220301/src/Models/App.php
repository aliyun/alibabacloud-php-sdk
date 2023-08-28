<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class App extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $logo;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $redirectUri;

    /**
     * @var string[]
     */
    public $scope;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'appId'       => 'app_id',
        'appName'     => 'app_name',
        'appSecret'   => 'app_secret',
        'createdAt'   => 'created_at',
        'description' => 'description',
        'logo'        => 'logo',
        'provider'    => 'provider',
        'redirectUri' => 'redirect_uri',
        'scope'       => 'scope',
        'stage'       => 'stage',
        'type'        => 'type',
        'updatedAt'   => 'updated_at',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['app_name'] = $this->appName;
        }
        if (null !== $this->appSecret) {
            $res['app_secret'] = $this->appSecret;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->logo) {
            $res['logo'] = $this->logo;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        if (null !== $this->redirectUri) {
            $res['redirect_uri'] = $this->redirectUri;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return App
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['app_id'])) {
            $model->appId = $map['app_id'];
        }
        if (isset($map['app_name'])) {
            $model->appName = $map['app_name'];
        }
        if (isset($map['app_secret'])) {
            $model->appSecret = $map['app_secret'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['logo'])) {
            $model->logo = $map['logo'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }
        if (isset($map['redirect_uri'])) {
            $model->redirectUri = $map['redirect_uri'];
        }
        if (isset($map['scope'])) {
            if (!empty($map['scope'])) {
                $model->scope = $map['scope'];
            }
        }
        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
