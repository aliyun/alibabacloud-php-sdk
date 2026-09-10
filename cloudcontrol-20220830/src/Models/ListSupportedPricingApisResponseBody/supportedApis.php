<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListSupportedPricingApisResponseBody;

use AlibabaCloud\Dara\Model;

class supportedApis extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $popCode;

    /**
     * @var string
     */
    public $popVersion;
    protected $_name = [
        'apiName' => 'apiName',
        'popCode' => 'popCode',
        'popVersion' => 'popVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }

        if (null !== $this->popCode) {
            $res['popCode'] = $this->popCode;
        }

        if (null !== $this->popVersion) {
            $res['popVersion'] = $this->popVersion;
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
        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }

        if (isset($map['popCode'])) {
            $model->popCode = $map['popCode'];
        }

        if (isset($map['popVersion'])) {
            $model->popVersion = $map['popVersion'];
        }

        return $model;
    }
}
