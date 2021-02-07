<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderResponseBody;

use AlibabaCloud\Tea\Model;

class SAMLProvider extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $SAMLProviderName;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $encodedSAMLMetadataDocument;

    /**
     * @var string
     */
    public $arn;
    protected $_name = [
        'description'                 => 'Description',
        'updateDate'                  => 'UpdateDate',
        'SAMLProviderName'            => 'SAMLProviderName',
        'createDate'                  => 'CreateDate',
        'encodedSAMLMetadataDocument' => 'EncodedSAMLMetadataDocument',
        'arn'                         => 'Arn',
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
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->encodedSAMLMetadataDocument) {
            $res['EncodedSAMLMetadataDocument'] = $this->encodedSAMLMetadataDocument;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['EncodedSAMLMetadataDocument'])) {
            $model->encodedSAMLMetadataDocument = $map['EncodedSAMLMetadataDocument'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        return $model;
    }
}
