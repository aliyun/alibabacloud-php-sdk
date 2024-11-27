<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceStoreInfoResponseBody extends Model
{
    /**
     * @example 102400
     *
     * @var int
     */
    public $max;

    /**
     * @example 5EAB922E-F476-5DFA-9290-313C608E724B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1024
     *
     * @var int
     */
    public $usage;
    protected $_name = [
        'max'       => 'Max',
        'requestId' => 'RequestId',
        'usage'     => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceStoreInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
