<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCustomLogResponseBody\logCustomField;

class GetSiteCustomLogResponseBody extends Model
{
    /**
     * @var int
     */
    public $configId;
    /**
     * @var bool
     */
    public $isExist;
    /**
     * @var logCustomField
     */
    public $logCustomField;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->logCustomField) {
            $this->logCustomField->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->isExist) {
            $res['IsExist'] = $this->isExist;
        }

        if (null !== $this->logCustomField) {
            $res['LogCustomField'] = null !== $this->logCustomField ? $this->logCustomField->toArray($noStream) : $this->logCustomField;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
