<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListRunMetricsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example loss
     *
     * @var string
     */
    public $key;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 0
     *
     * @var int
     */
    public $pageToken;
    protected $_name = [
        'key'        => 'Key',
        'maxResults' => 'MaxResults',
        'pageToken'  => 'PageToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->pageToken) {
            $res['PageToken'] = $this->pageToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRunMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['PageToken'])) {
            $model->pageToken = $map['PageToken'];
        }

        return $model;
    }
}
