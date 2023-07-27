<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\GetAccessPointResult;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $publicEndpoint;
    protected $_name = [
        'publicEndpoint' => 'PublicEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicEndpoint) {
            $res['PublicEndpoint'] = $this->publicEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicEndpoint'])) {
            $model->publicEndpoint = $map['PublicEndpoint'];
        }

        return $model;
    }
}
