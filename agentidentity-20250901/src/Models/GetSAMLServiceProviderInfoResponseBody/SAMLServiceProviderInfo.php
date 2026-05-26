<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetSAMLServiceProviderInfoResponseBody;

use AlibabaCloud\Dara\Model;

class SAMLServiceProviderInfo extends Model
{
    /**
     * @var string
     */
    public $ACSURL;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $SPMetadataDocument;

    /**
     * @var string
     */
    public $userPoolId;
    protected $_name = [
        'ACSURL' => 'ACSURL',
        'entityId' => 'EntityId',
        'SPMetadataDocument' => 'SPMetadataDocument',
        'userPoolId' => 'UserPoolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ACSURL) {
            $res['ACSURL'] = $this->ACSURL;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->SPMetadataDocument) {
            $res['SPMetadataDocument'] = $this->SPMetadataDocument;
        }

        if (null !== $this->userPoolId) {
            $res['UserPoolId'] = $this->userPoolId;
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
        if (isset($map['ACSURL'])) {
            $model->ACSURL = $map['ACSURL'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['SPMetadataDocument'])) {
            $model->SPMetadataDocument = $map['SPMetadataDocument'];
        }

        if (isset($map['UserPoolId'])) {
            $model->userPoolId = $map['UserPoolId'];
        }

        return $model;
    }
}
