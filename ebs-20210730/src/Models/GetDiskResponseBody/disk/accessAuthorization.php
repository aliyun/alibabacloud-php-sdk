<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponseBody\disk;

use AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponseBody\disk\accessAuthorization\ecs;
use AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponseBody\disk\accessAuthorization\pod;
use AlibabaCloud\Tea\Model;

class accessAuthorization extends Model
{
    /**
     * @description The token that is used to access the disk.
     *
     * @example 4cd9******************
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description The information of ecs.
     *
     * @var ecs
     */
    public $ecs;

    /**
     * @description The information of pod.
     *
     * @var pod
     */
    public $pod;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'ecs'         => 'Ecs',
        'pod'         => 'Pod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->ecs) {
            $res['Ecs'] = null !== $this->ecs ? $this->ecs->toMap() : null;
        }
        if (null !== $this->pod) {
            $res['Pod'] = null !== $this->pod ? $this->pod->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessAuthorization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['Ecs'])) {
            $model->ecs = ecs::fromMap($map['Ecs']);
        }
        if (isset($map['Pod'])) {
            $model->pod = pod::fromMap($map['Pod']);
        }

        return $model;
    }
}
