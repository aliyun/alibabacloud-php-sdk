<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListRunMetricsRequest extends Model
{
    /**
     * @var string
     */
    public $key;
    /**
     * @var int
     */
    public $maxResults;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
