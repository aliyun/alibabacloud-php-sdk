<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderResponseBody;

use AlibabaCloud\Dara\Model;

class SAMLProvider extends Model
{
    /**
     * @var string
     */
    public $arn;
    /**
     * @var string
     */
    public $createDate;
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
    public $SAMLProviderName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
