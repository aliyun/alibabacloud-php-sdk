<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponseBody\appSecrets\appSecret;

class appSecrets extends Model
{
    /**
     * @var appSecret[]
     */
    public $appSecret;
    protected $_name = [
        'appSecret' => 'AppSecret',
    ];

    public function validate()
    {
        if (\is_array($this->appSecret)) {
            Model::validateArray($this->appSecret);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appSecret) {
            if (\is_array($this->appSecret)) {
                $res['AppSecret'] = [];
                $n1               = 0;
                foreach ($this->appSecret as $item1) {
                    $res['AppSecret'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AppSecret'])) {
            if (!empty($map['AppSecret'])) {
                $model->appSecret = [];
                $n1               = 0;
                foreach ($map['AppSecret'] as $item1) {
                    $model->appSecret[$n1++] = appSecret::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
