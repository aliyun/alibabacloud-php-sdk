<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchAbolishApisRequest\api;

class BatchAbolishApisRequest extends Model
{
    /**
     * @var api[]
     */
    public $api;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'api' => 'Api',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        if (\is_array($this->api)) {
            Model::validateArray($this->api);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            if (\is_array($this->api)) {
                $res['Api'] = [];
                $n1 = 0;
                foreach ($this->api as $item1) {
                    $res['Api'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['Api'])) {
            if (!empty($map['Api'])) {
                $model->api = [];
                $n1 = 0;
                foreach ($map['Api'] as $item1) {
                    $model->api[$n1] = api::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
