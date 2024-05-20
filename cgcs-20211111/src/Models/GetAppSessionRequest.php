<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class GetAppSessionRequest extends Model
{
    /**
     * @example 1ADE0XXXX
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @example 100XXXX
     *
     * @var string
     */
    public $platformSessionId;
    protected $_name = [
        'customSessionId'   => 'CustomSessionId',
        'platformSessionId' => 'PlatformSessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }

        return $model;
    }
}
