<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderResponse;

use AlibabaCloud\Tea\Model;

class SAMLProvider extends Model
{
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
    public $description;

    /**
     * @var string
     */
    public $encodedSAMLMetadataDocument;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $createDate;
    protected $_name = [
        'updateDate'                  => 'UpdateDate',
        'SAMLProviderName'            => 'SAMLProviderName',
        'description'                 => 'Description',
        'encodedSAMLMetadataDocument' => 'EncodedSAMLMetadataDocument',
        'arn'                         => 'Arn',
        'createDate'                  => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('SAMLProviderName', $this->SAMLProviderName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('encodedSAMLMetadataDocument', $this->encodedSAMLMetadataDocument, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encodedSAMLMetadataDocument) {
            $res['EncodedSAMLMetadataDocument'] = $this->encodedSAMLMetadataDocument;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncodedSAMLMetadataDocument'])) {
            $model->encodedSAMLMetadataDocument = $map['EncodedSAMLMetadataDocument'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
