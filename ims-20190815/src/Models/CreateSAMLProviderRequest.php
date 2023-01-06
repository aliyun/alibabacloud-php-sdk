<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateSAMLProviderRequest extends Model
{
    /**
     * @example This is a provider.
     *
     * @var string
     */
    public $description;

    /**
     * @example PD94bWwgdmVy****
     *
     * @var string
     */
    public $encodedSAMLMetadataDocument;

    /**
     * @example test-provider
     *
     * @var string
     */
    public $SAMLProviderName;
    protected $_name = [
        'description'                 => 'Description',
        'encodedSAMLMetadataDocument' => 'EncodedSAMLMetadataDocument',
        'SAMLProviderName'            => 'SAMLProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encodedSAMLMetadataDocument) {
            $res['EncodedSAMLMetadataDocument'] = $this->encodedSAMLMetadataDocument;
        }
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSAMLProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncodedSAMLMetadataDocument'])) {
            $model->encodedSAMLMetadataDocument = $map['EncodedSAMLMetadataDocument'];
        }
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }

        return $model;
    }
}
