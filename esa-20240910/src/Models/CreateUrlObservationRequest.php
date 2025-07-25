<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateUrlObservationRequest extends Model
{
    /**
     * @var string
     */
    public $sdkType;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'sdkType' => 'SdkType',
        'siteId' => 'SiteId',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sdkType) {
            $res['SdkType'] = $this->sdkType;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['SdkType'])) {
            $model->sdkType = $map['SdkType'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
