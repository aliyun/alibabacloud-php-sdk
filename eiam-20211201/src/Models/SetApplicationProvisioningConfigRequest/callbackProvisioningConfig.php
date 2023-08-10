<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest;

use AlibabaCloud\Tea\Model;

class callbackProvisioningConfig extends Model
{
    /**
     * @description The URL that the application uses to receive IDaaS event callbacks.
     *
     * @example https://example.com/event/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The symmetric key for IDaaS event callbacks. The key is an AES-256 encryption key in the HEX format.
     *
     * @example ad3b248**************************b3561a73d7
     *
     * @var string
     */
    public $encryptKey;

    /**
     * @description Specifies whether to encrypt IDaaS event callback messages. Valid values:
     *
     *   true: encrypt the messages.
     *   false: transmit the messages in plaintext.
     *
     * @example true
     *
     * @var bool
     */
    public $encryptRequired;

    /**
     * @description The list of types of IDaaS event callback messages that are supported by the listener.
     *
     * @var string[]
     */
    public $listenEventScopes;
    protected $_name = [
        'callbackUrl'       => 'CallbackUrl',
        'encryptKey'        => 'EncryptKey',
        'encryptRequired'   => 'EncryptRequired',
        'listenEventScopes' => 'ListenEventScopes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->encryptKey) {
            $res['EncryptKey'] = $this->encryptKey;
        }
        if (null !== $this->encryptRequired) {
            $res['EncryptRequired'] = $this->encryptRequired;
        }
        if (null !== $this->listenEventScopes) {
            $res['ListenEventScopes'] = $this->listenEventScopes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callbackProvisioningConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['EncryptKey'])) {
            $model->encryptKey = $map['EncryptKey'];
        }
        if (isset($map['EncryptRequired'])) {
            $model->encryptRequired = $map['EncryptRequired'];
        }
        if (isset($map['ListenEventScopes'])) {
            if (!empty($map['ListenEventScopes'])) {
                $model->listenEventScopes = $map['ListenEventScopes'];
            }
        }

        return $model;
    }
}
