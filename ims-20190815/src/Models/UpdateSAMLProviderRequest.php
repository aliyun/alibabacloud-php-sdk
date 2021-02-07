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
    public $newSAMLMetadataDocument;

    /**
     * @var string
     */
    public $newDescription;

    /**
     * @var string
     */
    public $akProxySuffix;

    /**
     * @var string
     */
    public $newEncodedSAMLMetadataDocument;
    protected $_name = [
        'SAMLProviderName'               => 'SAMLProviderName',
        'newSAMLMetadataDocument'        => 'NewSAMLMetadataDocument',
        'newDescription'                 => 'NewDescription',
        'akProxySuffix'                  => 'AkProxySuffix',
        'newEncodedSAMLMetadataDocument' => 'NewEncodedSAMLMetadataDocument',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }
        if (null !== $this->newSAMLMetadataDocument) {
            $res['NewSAMLMetadataDocument'] = $this->newSAMLMetadataDocument;
        }
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
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
        if (isset($map['NewSAMLMetadataDocument'])) {
            $model->newSAMLMetadataDocument = $map['NewSAMLMetadataDocument'];
        }
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }
        if (isset($map['NewEncodedSAMLMetadataDocument'])) {
            $model->newEncodedSAMLMetadataDocument = $map['NewEncodedSAMLMetadataDocument'];
        }

        return $model;
    }
}
