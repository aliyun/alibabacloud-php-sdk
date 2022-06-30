<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceIspsResponseBody;

use AlibabaCloud\Tea\Model;

class isps extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $ispId;
    protected $_name = [
        'count' => 'Count',
        'ispId' => 'IspId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ispId) {
            $res['IspId'] = $this->ispId;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['IspId'])) {
            $model->ispId = $map['IspId'];
        }

        return $model;
    }
}
