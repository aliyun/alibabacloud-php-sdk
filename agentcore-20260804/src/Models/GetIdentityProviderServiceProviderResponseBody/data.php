<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderServiceProviderResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $acsUrl;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $metadataXml;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'acsUrl' => 'acsUrl',
        'entityId' => 'entityId',
        'metadataXml' => 'metadataXml',
        'protocol' => 'protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acsUrl) {
            $res['acsUrl'] = $this->acsUrl;
        }

        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->metadataXml) {
            $res['metadataXml'] = $this->metadataXml;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
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
        if (isset($map['acsUrl'])) {
            $model->acsUrl = $map['acsUrl'];
        }

        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['metadataXml'])) {
            $model->metadataXml = $map['metadataXml'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}
