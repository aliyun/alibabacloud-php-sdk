<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class CheckUsedPropertyResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 22C97624-2405-54AC-BD44-A63FBE97CC2D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of convenience users that are associated with the property.
     *
     * @example 7
     *
     * @var int
     */
    public $useCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'useCount'  => 'UseCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->useCount) {
            $res['UseCount'] = $this->useCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckUsedPropertyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UseCount'])) {
            $model->useCount = $map['UseCount'];
        }

        return $model;
    }
}
