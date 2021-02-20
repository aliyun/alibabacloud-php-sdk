<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceIspsResponseBody;

use AlibabaCloud\Tea\Model;

class isps extends Model
{
    /**
     * @var string
     */
    public $ispId;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'ispId' => 'IspId',
        'count' => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ispId) {
            $res['IspId'] = $this->ispId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return isps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IspId'])) {
            $model->ispId = $map['IspId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
