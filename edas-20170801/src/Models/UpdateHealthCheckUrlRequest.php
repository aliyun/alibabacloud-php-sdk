<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateHealthCheckUrlRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example c627c157-560d-43ff-***************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The health check URL of the application. The URL must start with `http://`, and can be up to 255 characters in length. Example: `http://127.0.0.1:8080/_ehc.html`. If this parameter is not specified, the health check URL of the application is not changed.
     *
     * @example http://127.0.0.1:8080/_ehc.html
     *
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
