<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListIcebergSnapshotsRequest extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example ""
     *
     * @var string
     */
    public $pageToken;
    protected $_name = [
        'maxResults' => 'maxResults',
        'pageToken' => 'pageToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->pageToken) {
            $res['pageToken'] = $this->pageToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIcebergSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['pageToken'])) {
            $model->pageToken = $map['pageToken'];
        }

        return $model;
    }
}
