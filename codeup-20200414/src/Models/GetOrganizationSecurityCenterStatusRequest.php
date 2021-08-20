<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class GetOrganizationSecurityCenterStatusRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    protected $_name = [
        'accessToken' => 'AccessToken',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrganizationSecurityCenterStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        return $model;
    }
}
