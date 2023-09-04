<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectorySAMLServiceProviderInfoResponseBody;

use AlibabaCloud\Tea\Model;

class SAMLServiceProvider extends Model
{
    /**
     * @description The Assertion Consumer Service (ACS) URL of the SP.
     *
     * @example https://signin-cn-shanghai.alibabacloudsso.com/saml/acs/51d298a9-2a3f-4e23-97c7-7ad1cfa9****
     *
     * @var string
     */
    public $acsUrl;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The metadata file of the SP. The value of this parameter is Base64-encoded.
     *
     * @example PD94bWwgdmVyc2lv****
     *
     * @var string
     */
    public $encodedMetadataDocument;

    /**
     * @description The entity ID of the SP.
     *
     * @example https://signin-cn-shanghai.alibabacloudsso.com/saml/sp/d-00fc2p61****
     *
     * @var string
     */
    public $entityId;
    protected $_name = [
        'acsUrl'                  => 'AcsUrl',
        'directoryId'             => 'DirectoryId',
        'encodedMetadataDocument' => 'EncodedMetadataDocument',
        'entityId'                => 'EntityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acsUrl) {
            $res['AcsUrl'] = $this->acsUrl;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->encodedMetadataDocument) {
            $res['EncodedMetadataDocument'] = $this->encodedMetadataDocument;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SAMLServiceProvider
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcsUrl'])) {
            $model->acsUrl = $map['AcsUrl'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EncodedMetadataDocument'])) {
            $model->encodedMetadataDocument = $map['EncodedMetadataDocument'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        return $model;
    }
}
