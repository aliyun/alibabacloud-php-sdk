<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiKeyIdentityConfig;

use AlibabaCloud\Tea\Model;

class credentials extends Model
{
    /**
     * @var string
     */
    public $apikey;

    /**
     * @var string
     */
    public $generateMode;
    protected $_name = [
        'apikey' => 'apikey',
        'generateMode' => 'generateMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apikey) {
            $res['apikey'] = $this->apikey;
        }
        if (null !== $this->generateMode) {
            $res['generateMode'] = $this->generateMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return credentials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apikey'])) {
            $model->apikey = $map['apikey'];
        }
        if (isset($map['generateMode'])) {
            $model->generateMode = $map['generateMode'];
        }

        return $model;
    }
}
