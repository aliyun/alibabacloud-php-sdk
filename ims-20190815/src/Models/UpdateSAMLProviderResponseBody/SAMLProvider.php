<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\UpdateSAMLProviderResponseBody;

use AlibabaCloud\Tea\Model;

class SAMLProvider extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the IdP.
     *
     * @example acs:ram::177242285274****:saml-provider/test-provider
     *
     * @var string
     */
    public $arn;

    /**
     * @description The point in time at which the IdP was created. The time is displayed in UTC.
     *
     * @example 2020-10-22T02:37:05Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description of the IdP.
     *
     * @example This is a new provider.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the IdP.
     *
     * @example test-provider
     *
     * @var string
     */
    public $SAMLProviderName;

    /**
     * @description The point in time at which the information about the IdP was modified. The time is displayed in UTC.
     *
     * @example 2020-10-22T02:51:20Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'arn'              => 'Arn',
        'createDate'       => 'CreateDate',
        'description'      => 'Description',
        'SAMLProviderName' => 'SAMLProviderName',
        'updateDate'       => 'UpdateDate',
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
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
