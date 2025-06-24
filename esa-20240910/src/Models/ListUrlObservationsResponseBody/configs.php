<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListUrlObservationsResponseBody;

use AlibabaCloud\Dara\Model;

class configs extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $sdkType;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'configId' => 'ConfigId',
        'sdkType' => 'SdkType',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->sdkType) {
            $res['SdkType'] = $this->sdkType;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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

        if (isset($map['SdkType'])) {
            $model->sdkType = $map['SdkType'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
