<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\addBotProtectionHeaders;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\addSecurityHeaders;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\botManagement;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\clientIpIdentifier;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\securityLevel;

class WafSiteSettings extends Model
{
    /**
     * @var addBotProtectionHeaders
     */
    public $addBotProtectionHeaders;

    /**
     * @var addSecurityHeaders
     */
    public $addSecurityHeaders;

    /**
     * @var botManagement
     */
    public $botManagement;

    /**
     * @var clientIpIdentifier
     */
    public $clientIpIdentifier;

    /**
     * @var securityLevel
     */
    public $securityLevel;
    protected $_name = [
        'addBotProtectionHeaders' => 'AddBotProtectionHeaders',
        'addSecurityHeaders' => 'AddSecurityHeaders',
        'botManagement' => 'BotManagement',
        'clientIpIdentifier' => 'ClientIpIdentifier',
        'securityLevel' => 'SecurityLevel',
    ];

    public function validate()
    {
        if (null !== $this->addBotProtectionHeaders) {
            $this->addBotProtectionHeaders->validate();
        }
        if (null !== $this->addSecurityHeaders) {
            $this->addSecurityHeaders->validate();
        }
        if (null !== $this->botManagement) {
            $this->botManagement->validate();
        }
        if (null !== $this->clientIpIdentifier) {
            $this->clientIpIdentifier->validate();
        }
        if (null !== $this->securityLevel) {
            $this->securityLevel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addBotProtectionHeaders) {
            $res['AddBotProtectionHeaders'] = null !== $this->addBotProtectionHeaders ? $this->addBotProtectionHeaders->toArray($noStream) : $this->addBotProtectionHeaders;
        }

        if (null !== $this->addSecurityHeaders) {
            $res['AddSecurityHeaders'] = null !== $this->addSecurityHeaders ? $this->addSecurityHeaders->toArray($noStream) : $this->addSecurityHeaders;
        }

        if (null !== $this->botManagement) {
            $res['BotManagement'] = null !== $this->botManagement ? $this->botManagement->toArray($noStream) : $this->botManagement;
        }

        if (null !== $this->clientIpIdentifier) {
            $res['ClientIpIdentifier'] = null !== $this->clientIpIdentifier ? $this->clientIpIdentifier->toArray($noStream) : $this->clientIpIdentifier;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = null !== $this->securityLevel ? $this->securityLevel->toArray($noStream) : $this->securityLevel;
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
        if (isset($map['AddBotProtectionHeaders'])) {
            $model->addBotProtectionHeaders = addBotProtectionHeaders::fromMap($map['AddBotProtectionHeaders']);
        }

        if (isset($map['AddSecurityHeaders'])) {
            $model->addSecurityHeaders = addSecurityHeaders::fromMap($map['AddSecurityHeaders']);
        }

        if (isset($map['BotManagement'])) {
            $model->botManagement = botManagement::fromMap($map['BotManagement']);
        }

        if (isset($map['ClientIpIdentifier'])) {
            $model->clientIpIdentifier = clientIpIdentifier::fromMap($map['ClientIpIdentifier']);
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = securityLevel::fromMap($map['SecurityLevel']);
        }

        return $model;
    }
}
