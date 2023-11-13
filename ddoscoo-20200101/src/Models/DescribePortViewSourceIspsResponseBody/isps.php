<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceIspsResponseBody;

use AlibabaCloud\Tea\Model;

class isps extends Model
{
    /**
     * @description The total number of requests that are sent from the ISP.
     *
     * > This parameter does not indicate the accurate number of requests. You can use this parameter to calculate the proportion of requests from different ISPs.
     * @example 3390671
     *
     * @var int
     */
    public $count;

    /**
     * @description The ID of the ISP. For more information, see the ISP codes table.
     *
     * @example 100017
     *
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
