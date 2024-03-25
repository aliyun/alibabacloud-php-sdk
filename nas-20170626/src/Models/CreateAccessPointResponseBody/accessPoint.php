<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessPointResponseBody;

use AlibabaCloud\Tea\Model;

class accessPoint extends Model
{
    /**
     * @example ap-ie15ydanoz.001014****-w****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $accessPointDomain;

    /**
     * @example ap-ie15yd****
     *
     * @var string
     */
    public $accessPointId;
    protected $_name = [
        'accessPointDomain' => 'AccessPointDomain',
        'accessPointId'     => 'AccessPointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointDomain) {
            $res['AccessPointDomain'] = $this->accessPointDomain;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessPoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointDomain'])) {
            $model->accessPointDomain = $map['AccessPointDomain'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        return $model;
    }
}
