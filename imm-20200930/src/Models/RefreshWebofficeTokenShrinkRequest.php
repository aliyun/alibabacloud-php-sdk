<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class RefreshWebofficeTokenShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $refreshToken;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'credentialConfigShrink' => 'CredentialConfig',
        'projectName' => 'ProjectName',
        'refreshToken' => 'RefreshToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }

        return $model;
    }
}
