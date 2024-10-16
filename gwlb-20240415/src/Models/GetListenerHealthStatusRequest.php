<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusRequest\filter;
use AlibabaCloud\Tea\Model;

class GetListenerHealthStatusRequest extends Model
{
    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @description This parameter is required.
     *
     * @example lsn-7sixpvm5fc3v0b****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 4f1d7cc9f51e18904e8a063603a6b0c3d03bc69f78734254e0b5e8707e68****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $skip;
    protected $_name = [
        'filter'     => 'Filter',
        'listenerId' => 'ListenerId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'skip'       => 'Skip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetListenerHealthStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        return $model;
    }
}
