<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterInspectReportsResponseBody\reports;
use AlibabaCloud\Tea\Model;

class ListClusterInspectReportsResponseBody extends Model
{
    /**
     * @description The pagination token.
     *
     * @example 405b99e5411f9a4e7148506e45
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The list of inspection reports.
     *
     * @var reports[]
     */
    public $reports;

    /**
     * @description The request ID.
     *
     * @example 49511F2D-D56A-5C24-B9AE-C8491E09B***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'nextToken',
        'reports' => 'reports',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->reports) {
            $res['reports'] = [];
            if (null !== $this->reports && \is_array($this->reports)) {
                $n = 0;
                foreach ($this->reports as $item) {
                    $res['reports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterInspectReportsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['reports'])) {
            if (!empty($map['reports'])) {
                $model->reports = [];
                $n = 0;
                foreach ($map['reports'] as $item) {
                    $model->reports[$n++] = null !== $item ? reports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
