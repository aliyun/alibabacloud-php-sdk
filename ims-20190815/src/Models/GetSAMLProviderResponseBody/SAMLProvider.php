<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderResponseBody;

use AlibabaCloud\Tea\Model;

class SAMLProvider extends Model
{
    /**
     * @example acs:ram::177242285274****:saml-provider/test-provider
     *
     * @var string
     */
    public $arn;

    /**
     * @example 2020-10-22T02:37:05Z
     *
     * @var string
     */
    public $createDate;

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

    /**
     * @example 2020-10-22T02:51:20Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'arn'                         => 'Arn',
        'createDate'                  => 'CreateDate',
        'description'                 => 'Description',
        'encodedSAMLMetadataDocument' => 'EncodedSAMLMetadataDocument',
        'SAMLProviderName'            => 'SAMLProviderName',
        'updateDate'                  => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encodedSAMLMetadataDocument) {
            $res['EncodedSAMLMetadataDocument'] = $this->encodedSAMLMetadataDocument;
        }
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SAMLProvider
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncodedSAMLMetadataDocument'])) {
            $model->encodedSAMLMetadataDocument = $map['EncodedSAMLMetadataDocument'];
        }
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
