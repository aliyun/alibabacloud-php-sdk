<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListFailureMsgsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestFingerprint;
    protected $_name = [
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'requestFingerprint' => 'RequestFingerprint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestFingerprint) {
            $res['RequestFingerprint'] = $this->requestFingerprint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFailureMsgsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestFingerprint'])) {
            $model->requestFingerprint = $map['RequestFingerprint'];
        }

        return $model;
    }
}
