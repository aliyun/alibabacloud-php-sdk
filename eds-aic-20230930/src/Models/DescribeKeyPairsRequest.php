<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeKeyPairsRequest extends Model
{
    /**
     * @var string[]
     */
    public $keyPairIds;

    /**
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAYRHtOLVQzCYj17y+OP7LZQBUVVbi0GTu8g5****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'keyPairIds'  => 'KeyPairIds',
        'keyPairName' => 'KeyPairName',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairIds) {
            $res['KeyPairIds'] = $this->keyPairIds;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKeyPairsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairIds'])) {
            if (!empty($map['KeyPairIds'])) {
                $model->keyPairIds = $map['KeyPairIds'];
            }
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
