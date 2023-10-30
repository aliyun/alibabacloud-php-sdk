<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class ListProjectFeatureViewOwnersResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $owners;

    /**
     * @example 0FBBE454-9BD1-5D8F-9129-D14DB7FAFE0B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'owners'    => 'Owners',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->owners) {
            $res['Owners'] = $this->owners;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectFeatureViewOwnersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Owners'])) {
            if (!empty($map['Owners'])) {
                $model->owners = $map['Owners'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
