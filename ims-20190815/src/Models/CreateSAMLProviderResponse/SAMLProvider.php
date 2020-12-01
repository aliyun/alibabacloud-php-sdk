<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateSAMLProviderResponse;

use AlibabaCloud\Tea\Model;

class SAMLProvider extends Model
{
    /**
     * @var string
     */
    public $SAMLProviderName;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'SAMLProviderName' => 'SAMLProviderName',
        'arn'              => 'Arn',
        'description'      => 'Description',
        'createDate'       => 'CreateDate',
        'updateDate'       => 'UpdateDate',
    ];

    public function validate()
    {
        Model::validateRequired('SAMLProviderName', $this->SAMLProviderName, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
