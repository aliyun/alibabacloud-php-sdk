<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class IsIncludedByUserWhitelistResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isIncluded;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isIncluded' => 'IsIncluded',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isIncluded) {
            $res['IsIncluded'] = $this->isIncluded;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsIncludedByUserWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsIncluded'])) {
            $model->isIncluded = $map['IsIncluded'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
