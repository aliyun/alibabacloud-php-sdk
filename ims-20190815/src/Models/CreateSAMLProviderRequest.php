<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateSAMLProviderRequest extends Model
{
    /**
     * @var string
     */
    public $SAMLProviderName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encodedSAMLMetadataDocument;
    protected $_name = [
        'SAMLProviderName'            => 'SAMLProviderName',
        'description'                 => 'Description',
        'encodedSAMLMetadataDocument' => 'EncodedSAMLMetadataDocument',
    ];

    public function validate()
    {
        Model::validateRequired('SAMLProviderName', $this->SAMLProviderName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encodedSAMLMetadataDocument) {
            $res['EncodedSAMLMetadataDocument'] = $this->encodedSAMLMetadataDocument;
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
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncodedSAMLMetadataDocument'])) {
            $model->encodedSAMLMetadataDocument = $map['EncodedSAMLMetadataDocument'];
        }

        return $model;
    }
}
