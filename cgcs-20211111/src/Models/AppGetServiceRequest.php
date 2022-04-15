<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class AppGetServiceRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $requestApp;
    protected $_name = [
        'appId'      => 'AppId',
        'requestApp' => 'RequestApp',
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
        if (null !== $this->requestApp) {
            $res['RequestApp'] = $this->requestApp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppGetServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RequestApp'])) {
            $model->requestApp = $map['RequestApp'];
        }

        return $model;
    }
}
