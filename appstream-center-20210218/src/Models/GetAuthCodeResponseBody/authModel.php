<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetAuthCodeResponseBody;

use AlibabaCloud\Tea\Model;

class authModel extends Model
{
    /**
     * @example acv2ZEq2TNSqOlX+DvyetHGRT08iPhbWg/os1W4HojpBxkMQZkAnbKSfz/wNvS0E149IQZ5TogvBUE8ghCSVV+QBnv48Y+sn4z9fY5ywZA1peI5s4TplQI0TADBhPZXEIzMOdmbNsDGGlGcKOAq8ixd1Epzdu9XfvRzdLOO6o3zQwTZxXsjOgGBW8JTcgCP9W9iYiIjHIdZ2VCAnmMzuyVkyED8gymEevH10QoclyH/O3s8Yq6VF34gMXihDQeiI8PyiAZrW0JWXSWpdy3n4yGtAqMAgv46FzTA+XJ6C********
     *
     * @var string
     */
    public $authCode;

    /**
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $expireTime;
    protected $_name = [
        'authCode'   => 'AuthCode',
        'endUserId'  => 'EndUserId',
        'expireTime' => 'ExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        return $model;
    }
}
