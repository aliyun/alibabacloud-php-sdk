<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateSAMLProviderRequest extends Model
{
    /**
     * @var string
     */
    public $newDescription;

    /**
     * @var string
     */
    public $newEncodedSAMLMetadataDocument;

    /**
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
