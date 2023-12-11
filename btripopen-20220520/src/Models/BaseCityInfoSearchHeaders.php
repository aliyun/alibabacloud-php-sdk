<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class BaseCityInfoSearchHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example feth00jqwls
     *
     * @var string
     */
    public $xAcsBtripAccessToken;
    protected $_name = [
        'xAcsBtripAccessToken' => 'x-acs-btrip-access-token',
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
        if (null !== $this->xAcsBtripAccessToken) {
            $res['x-acs-btrip-access-token'] = $this->xAcsBtripAccessToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BaseCityInfoSearchHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-acs-btrip-access-token'])) {
            $model->xAcsBtripAccessToken = $map['x-acs-btrip-access-token'];
        }

        return $model;
    }
}
