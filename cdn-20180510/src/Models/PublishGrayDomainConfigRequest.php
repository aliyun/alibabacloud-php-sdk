<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class PublishGrayDomainConfigRequest extends Model
{
    /**
     * @var int
     */
    public $customCountryId;

    /**
     * @var int
     */
    public $customPercent;

    /**
     * @var int
     */
    public $customProvinceId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $publishMode;
    protected $_name = [
        'customCountryId' => 'CustomCountryId',
        'customPercent' => 'CustomPercent',
        'customProvinceId' => 'CustomProvinceId',
        'domainName' => 'DomainName',
        'publishMode' => 'PublishMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customCountryId) {
            $res['CustomCountryId'] = $this->customCountryId;
        }

        if (null !== $this->customPercent) {
            $res['CustomPercent'] = $this->customPercent;
        }

        if (null !== $this->customProvinceId) {
            $res['CustomProvinceId'] = $this->customProvinceId;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->publishMode) {
            $res['PublishMode'] = $this->publishMode;
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
        if (isset($map['CustomCountryId'])) {
            $model->customCountryId = $map['CustomCountryId'];
        }

        if (isset($map['CustomPercent'])) {
            $model->customPercent = $map['CustomPercent'];
        }

        if (isset($map['CustomProvinceId'])) {
            $model->customProvinceId = $map['CustomProvinceId'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['PublishMode'])) {
            $model->publishMode = $map['PublishMode'];
        }

        return $model;
    }
}
