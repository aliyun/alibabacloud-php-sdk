<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ConnectorAuthenticationInput\basic;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ConnectorAuthenticationInput\botToken;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ConnectorAuthenticationInput\oauth;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ConnectorAuthenticationInput\patToken;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ConnectorAuthenticationInput\role;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ConnectorAuthenticationInput\satellite;

class ConnectorAuthenticationInput extends Model
{
    /**
     * @var basic
     */
    public $basic;

    /**
     * @var botToken
     */
    public $botToken;

    /**
     * @var oauth
     */
    public $oauth;

    /**
     * @var patToken
     */
    public $patToken;

    /**
     * @var role
     */
    public $role;

    /**
     * @var satellite
     */
    public $satellite;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'basic' => 'basic',
        'botToken' => 'botToken',
        'oauth' => 'oauth',
        'patToken' => 'patToken',
        'role' => 'role',
        'satellite' => 'satellite',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->basic) {
            $this->basic->validate();
        }
        if (null !== $this->botToken) {
            $this->botToken->validate();
        }
        if (null !== $this->oauth) {
            $this->oauth->validate();
        }
        if (null !== $this->patToken) {
            $this->patToken->validate();
        }
        if (null !== $this->role) {
            $this->role->validate();
        }
        if (null !== $this->satellite) {
            $this->satellite->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basic) {
            $res['basic'] = null !== $this->basic ? $this->basic->toArray($noStream) : $this->basic;
        }

        if (null !== $this->botToken) {
            $res['botToken'] = null !== $this->botToken ? $this->botToken->toArray($noStream) : $this->botToken;
        }

        if (null !== $this->oauth) {
            $res['oauth'] = null !== $this->oauth ? $this->oauth->toArray($noStream) : $this->oauth;
        }

        if (null !== $this->patToken) {
            $res['patToken'] = null !== $this->patToken ? $this->patToken->toArray($noStream) : $this->patToken;
        }

        if (null !== $this->role) {
            $res['role'] = null !== $this->role ? $this->role->toArray($noStream) : $this->role;
        }

        if (null !== $this->satellite) {
            $res['satellite'] = null !== $this->satellite ? $this->satellite->toArray($noStream) : $this->satellite;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['basic'])) {
            $model->basic = basic::fromMap($map['basic']);
        }

        if (isset($map['botToken'])) {
            $model->botToken = botToken::fromMap($map['botToken']);
        }

        if (isset($map['oauth'])) {
            $model->oauth = oauth::fromMap($map['oauth']);
        }

        if (isset($map['patToken'])) {
            $model->patToken = patToken::fromMap($map['patToken']);
        }

        if (isset($map['role'])) {
            $model->role = role::fromMap($map['role']);
        }

        if (isset($map['satellite'])) {
            $model->satellite = satellite::fromMap($map['satellite']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
