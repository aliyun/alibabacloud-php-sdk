<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddOrUpdateWelcomeTextHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var string
     */
    public $xAcsAligenieAccessToken;

    /**
     * @var string
     */
    public $authorization;
    protected $_name = [
        'xAcsAligenieAccessToken' => 'x-acs-aligenie-access-token',
        'authorization'           => 'Authorization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xAcsAligenieAccessToken) {
            $res['x-acs-aligenie-access-token'] = $this->xAcsAligenieAccessToken;
        }
        if (null !== $this->authorization) {
            $res['Authorization'] = $this->authorization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrUpdateWelcomeTextHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-acs-aligenie-access-token'])) {
            $model->xAcsAligenieAccessToken = $map['x-acs-aligenie-access-token'];
        }
        if (isset($map['Authorization'])) {
            $model->authorization = $map['Authorization'];
        }

        return $model;
    }
}
