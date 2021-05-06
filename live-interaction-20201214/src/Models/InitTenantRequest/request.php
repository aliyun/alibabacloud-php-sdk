<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\InitTenantRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 应用appKey
     *
     * @var string
     */
    public $domain;
    protected $_name = [
        'domain' => 'domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        return $model;
    }
}
