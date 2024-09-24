<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsResponseBody\orgs;
use AlibabaCloud\Tea\Model;

class DescribeOrgsResponseBody extends Model
{
    /**
     * @description The token that determines the start point of the query. The return value is the value of the NextToken response parameter that was returned last time the DescribeOrgs operation was called.
     *
     * @example AAAAAV3MpHK****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The organizations.
     *
     * @var orgs[]
     */
    public $orgs;

    /**
     * @description The request ID.
     *
     * @example 0B4BB****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'orgs'      => 'Orgs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orgs) {
            $res['Orgs'] = [];
            if (null !== $this->orgs && \is_array($this->orgs)) {
                $n = 0;
                foreach ($this->orgs as $item) {
                    $res['Orgs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeOrgsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Orgs'])) {
            if (!empty($map['Orgs'])) {
                $model->orgs = [];
                $n           = 0;
                foreach ($map['Orgs'] as $item) {
                    $model->orgs[$n++] = null !== $item ? orgs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
