<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class CreateModuleVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'moduleVersion' => 'moduleVersion',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModuleVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
