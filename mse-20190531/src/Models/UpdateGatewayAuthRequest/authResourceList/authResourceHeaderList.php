<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthRequest\authResourceList;

use AlibabaCloud\Dara\Model;

class authResourceHeaderList extends Model
{
    /**
     * @var string
     */
    public $headerKey;

    /**
     * @var string
     */
    public $headerMethod;

    /**
     * @var string
     */
    public $headerValue;
    protected $_name = [
        'headerKey' => 'HeaderKey',
        'headerMethod' => 'HeaderMethod',
        'headerValue' => 'HeaderValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headerKey) {
            $res['HeaderKey'] = $this->headerKey;
        }

        if (null !== $this->headerMethod) {
            $res['HeaderMethod'] = $this->headerMethod;
        }

        if (null !== $this->headerValue) {
            $res['HeaderValue'] = $this->headerValue;
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
        if (isset($map['HeaderKey'])) {
            $model->headerKey = $map['HeaderKey'];
        }

        if (isset($map['HeaderMethod'])) {
            $model->headerMethod = $map['HeaderMethod'];
        }

        if (isset($map['HeaderValue'])) {
            $model->headerValue = $map['HeaderValue'];
        }

        return $model;
    }
}
