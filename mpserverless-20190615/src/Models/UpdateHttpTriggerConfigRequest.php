<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class UpdateHttpTriggerConfigRequest extends Model
{
    /**
     * @example abc.xxx.com
     *
     * @var string
     */
    public $customDomain;

    /**
     * @example -----BEGIN CERTIFICATE----- MIIFK****GCSqGSIb3DQEBCwUA= -----END CERTIFICATE-----
     *
     * @var string
     */
    public $customDomainCertificate;

    /**
     * @example -----BEGIN PRIVATE KEY----- MIIEwA******DmUwVD0M74ECwZw= -----END PRIVATE KEY-----
     *
     * @var string
     */
    public $customDomainPrivateKey;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableService;

    /**
     * @example 34C45988-2B24-****-A4DC-4D6C952890D8
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'customDomain'            => 'CustomDomain',
        'customDomainCertificate' => 'CustomDomainCertificate',
        'customDomainPrivateKey'  => 'CustomDomainPrivateKey',
        'enableService'           => 'EnableService',
        'spaceId'                 => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customDomain) {
            $res['CustomDomain'] = $this->customDomain;
        }
        if (null !== $this->customDomainCertificate) {
            $res['CustomDomainCertificate'] = $this->customDomainCertificate;
        }
        if (null !== $this->customDomainPrivateKey) {
            $res['CustomDomainPrivateKey'] = $this->customDomainPrivateKey;
        }
        if (null !== $this->enableService) {
            $res['EnableService'] = $this->enableService;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHttpTriggerConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomDomain'])) {
            $model->customDomain = $map['CustomDomain'];
        }
        if (isset($map['CustomDomainCertificate'])) {
            $model->customDomainCertificate = $map['CustomDomainCertificate'];
        }
        if (isset($map['CustomDomainPrivateKey'])) {
            $model->customDomainPrivateKey = $map['CustomDomainPrivateKey'];
        }
        if (isset($map['EnableService'])) {
            $model->enableService = $map['EnableService'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
