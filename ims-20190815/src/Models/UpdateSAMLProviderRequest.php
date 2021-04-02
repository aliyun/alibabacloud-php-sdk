<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateSAMLProviderRequest extends Model
{
    /**
     * @var string
     */
    public $SAMLProviderName;

    /**
     * @var string
     */
    public $newDescription;

    /**
     * @var string
     */
    public $newEncodedSAMLMetadataDocument;
    protected $_name = [
        'SAMLProviderName'               => 'SAMLProviderName',
        'newDescription'                 => 'NewDescription',
        'newEncodedSAMLMetadataDocument' => 'NewEncodedSAMLMetadataDocument',
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
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }
        if (null !== $this->newEncodedSAMLMetadataDocument) {
            $res['NewEncodedSAMLMetadataDocument'] = $this->newEncodedSAMLMetadataDocument;
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
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }
        if (isset($map['NewEncodedSAMLMetadataDocument'])) {
            $model->newEncodedSAMLMetadataDocument = $map['NewEncodedSAMLMetadataDocument'];
        }

        return $model;
    }
}
