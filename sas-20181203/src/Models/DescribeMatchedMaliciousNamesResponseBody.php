<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeMatchedMaliciousNamesResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeMatchedMaliciousNamesResponseBody extends Model
{
    /**
     * @description The number of entries returned on the current page.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The returned data.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example C7CD1BE6-97A2-5524-A529-B55C63E55D59
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'     => 'Count',
        'data'      => 'Data',
        'requestId' => 'RequestId',
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
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMatchedMaliciousNamesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
