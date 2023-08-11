<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretResponseBody;

use AlibabaCloud\Tea\Model;

class appSecret extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 472457090344041****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the application secret.
     *
     * @example 2efd5004-005c-4f05-83c6-5b1dd176****
     *
     * @var string
     */
    public $appSecretId;

    /**
     * @description The content of the application secret. This value can be used as the client secret for open authorization.
     *
     * @example ai78ZmmxnlUG1jXlBZRDFKos9DIjY4m17Q7dCpMwn1rqXsTGb1X1XmrmveMp****
     *
     * @var string
     */
    public $appSecretValue;

    /**
     * @description The creation time.
     *
     * @example 2020-10-26T02:52:31Z
     *
     * @var string
     */
    public $createDate;
    protected $_name = [
        'appId'          => 'AppId',
        'appSecretId'    => 'AppSecretId',
        'appSecretValue' => 'AppSecretValue',
        'createDate'     => 'CreateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSecretId) {
            $res['AppSecretId'] = $this->appSecretId;
        }
        if (null !== $this->appSecretValue) {
            $res['AppSecretValue'] = $this->appSecretValue;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appSecret
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSecretId'])) {
            $model->appSecretId = $map['AppSecretId'];
        }
        if (isset($map['AppSecretValue'])) {
            $model->appSecretValue = $map['AppSecretValue'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
