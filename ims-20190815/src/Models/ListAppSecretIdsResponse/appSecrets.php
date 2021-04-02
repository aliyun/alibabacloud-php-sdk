<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponse;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponse\appSecrets\appSecret;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('appSecret', $this->appSecret, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSecret) {
            $res['AppSecret'] = [];
            if (null !== $this->appSecret && \is_array($this->appSecret)) {
                $n = 0;
                foreach ($this->appSecret as $item) {
                    $res['AppSecret'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appSecrets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppSecret'])) {
            if (!empty($map['AppSecret'])) {
                $model->appSecret = [];
                $n                = 0;
                foreach ($map['AppSecret'] as $item) {
                    $model->appSecret[$n++] = null !== $item ? appSecret::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
