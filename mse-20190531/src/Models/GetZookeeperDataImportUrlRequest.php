<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetZookeeperDataImportUrlRequest extends Model
{
    /**
     * @description RestResult
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zip
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The type of the file.
     *
     * @example mse_prepaid_public_cn-zvp2xzzkk06
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'contentType'    => 'ContentType',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetZookeeperDataImportUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
