<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class UpdateHttpTriggerConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $enableService;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $customDomain;

    /**
     * @var string
     */
    public $customDomainCertificate;

    /**
     * @var string
     */
    public $customDomainPrivateKey;
    protected $_name = [
        'enableService'           => 'EnableService',
        'spaceId'                 => 'SpaceId',
        'customDomain'            => 'CustomDomain',
        'customDomainCertificate' => 'CustomDomainCertificate',
        'customDomainPrivateKey'  => 'CustomDomainPrivateKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableService) {
            $res['EnableService'] = $this->enableService;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->customDomain) {
            $res['CustomDomain'] = $this->customDomain;
        }
        if (null !== $this->customDomainCertificate) {
            $res['CustomDomainCertificate'] = $this->customDomainCertificate;
        }
        if (null !== $this->customDomainPrivateKey) {
            $res['CustomDomainPrivateKey'] = $this->customDomainPrivateKey;
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
        if (isset($map['EnableService'])) {
            $model->enableService = $map['EnableService'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['CustomDomain'])) {
            $model->customDomain = $map['CustomDomain'];
        }
        if (isset($map['CustomDomainCertificate'])) {
            $model->customDomainCertificate = $map['CustomDomainCertificate'];
        }
        if (isset($map['CustomDomainPrivateKey'])) {
            $model->customDomainPrivateKey = $map['CustomDomainPrivateKey'];
        }

        return $model;
    }
}
