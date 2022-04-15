<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class AppVersionDeleteServiceRequest extends Model
{
    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $requestApp;
    protected $_name = [
        'appVersionId' => 'AppVersionId',
        'requestApp'   => 'RequestApp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->requestApp) {
            $res['RequestApp'] = $this->requestApp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppVersionDeleteServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['RequestApp'])) {
            $model->requestApp = $map['RequestApp'];
        }

        return $model;
    }
}
