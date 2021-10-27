<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateRPSDKRequest extends Model
{
    /**
     * @var string
     */
    public $appUrl;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'appUrl'   => 'AppUrl',
        'lang'     => 'Lang',
        'platform' => 'Platform',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUrl) {
            $res['AppUrl'] = $this->appUrl;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRPSDKRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUrl'])) {
            $model->appUrl = $map['AppUrl'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
