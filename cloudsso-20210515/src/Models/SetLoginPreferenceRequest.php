<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class SetLoginPreferenceRequest extends Model
{
    /**
     * @var bool
     */
    public $allowUserToGetCredentials;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $loginNetworkMasks;
    protected $_name = [
        'allowUserToGetCredentials' => 'AllowUserToGetCredentials',
        'directoryId' => 'DirectoryId',
        'loginNetworkMasks' => 'LoginNetworkMasks',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUserToGetCredentials) {
            $res['AllowUserToGetCredentials'] = $this->allowUserToGetCredentials;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
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
        if (isset($map['AllowUserToGetCredentials'])) {
            $model->allowUserToGetCredentials = $map['AllowUserToGetCredentials'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }

        return $model;
    }
}
