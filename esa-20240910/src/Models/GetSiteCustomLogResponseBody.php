<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCustomLogResponseBody\logCustomField;
use AlibabaCloud\Tea\Model;

class GetSiteCustomLogResponseBody extends Model
{
    /**
     * @example 6befa4aa-2a94-4f51-a245-295787192d2c
     *
     * @var int
     */
    public $configId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isExist;

    /**
     * @var logCustomField
     */
    public $logCustomField;

    /**
     * @description Id of the request
     *
     * @example 6befa4aa-2a94-4f51-a245-295787192d2c
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 167026711***
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'configId'       => 'ConfigId',
        'isExist'        => 'IsExist',
        'logCustomField' => 'LogCustomField',
        'requestId'      => 'RequestId',
        'siteId'         => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->isExist) {
            $res['IsExist'] = $this->isExist;
        }
        if (null !== $this->logCustomField) {
            $res['LogCustomField'] = null !== $this->logCustomField ? $this->logCustomField->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSiteCustomLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['IsExist'])) {
            $model->isExist = $map['IsExist'];
        }
        if (isset($map['LogCustomField'])) {
            $model->logCustomField = logCustomField::fromMap($map['LogCustomField']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
