<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateSAMLProviderRequest extends Model
{
    /**
     * @description The new description.
     *
     * >  You must specify at least one of the `NewDescription` and `NewEncodedSAMLMetadataDocument` parameters.
     * @example This is a new provider.
     *
     * @var string
     */
    public $newDescription;

    /**
     * @description The new metadata file.
     *
     * >  You must specify at least one of the `NewDescription` and `NewEncodedSAMLMetadataDocument` parameters.
     * @example PD94bWwgdmVy****
     *
     * @var string
     */
    public $newEncodedSAMLMetadataDocument;

    /**
     * @description The name of the IdP whose information you want to modify.
     *
     * This parameter is required.
     * @example test-provider
     *
     * @var string
     */
    public $SAMLProviderName;
    protected $_name = [
        'newDescription'                 => 'NewDescription',
        'newEncodedSAMLMetadataDocument' => 'NewEncodedSAMLMetadataDocument',
        'SAMLProviderName'               => 'SAMLProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }
        if (null !== $this->newEncodedSAMLMetadataDocument) {
            $res['NewEncodedSAMLMetadataDocument'] = $this->newEncodedSAMLMetadataDocument;
        }
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSAMLProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }
        if (isset($map['NewEncodedSAMLMetadataDocument'])) {
            $model->newEncodedSAMLMetadataDocument = $map['NewEncodedSAMLMetadataDocument'];
        }
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }

        return $model;
    }
}
