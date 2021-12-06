<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectorySAMLServiceProviderInfoResponseBody;

use AlibabaCloud\Tea\Model;

class SAMLServiceProvider extends Model
{
    /**
     * @var string
     */
    public $acsUrl;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $encodedMetadataDocument;

    /**
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
