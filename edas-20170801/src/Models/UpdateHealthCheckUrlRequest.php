<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateHealthCheckUrlRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $hcURL;
    protected $_name = [
        'appId' => 'AppId',
        'hcURL' => 'hcURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->hcURL) {
            $res['hcURL'] = $this->hcURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHealthCheckUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['hcURL'])) {
            $model->hcURL = $map['hcURL'];
        }

        return $model;
    }
}
