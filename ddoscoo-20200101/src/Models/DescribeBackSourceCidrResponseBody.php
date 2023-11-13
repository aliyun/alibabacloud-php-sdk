<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackSourceCidrResponseBody extends Model
{
    /**
     * @description An array that consists of the back-to-origin CIDR blocks of the instance.
     *
     * @var string[]
     */
    public $cidrs;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cidrs'     => 'Cidrs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrs) {
            $res['Cidrs'] = $this->cidrs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackSourceCidrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidrs'])) {
            if (!empty($map['Cidrs'])) {
                $model->cidrs = $map['Cidrs'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
