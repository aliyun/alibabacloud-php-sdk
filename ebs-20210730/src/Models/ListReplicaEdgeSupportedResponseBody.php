<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ListReplicaEdgeSupportedResponseBody\supportedRegions;

class ListReplicaEdgeSupportedResponseBody extends Model
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
    public $requestId;

    /**
     * @var supportedRegions[]
     */
    public $supportedRegions;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'supportedRegions' => 'SupportedRegions',
    ];

    public function validate()
    {
        if (\is_array($this->supportedRegions)) {
            Model::validateArray($this->supportedRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportedRegions) {
            if (\is_array($this->supportedRegions)) {
                $res['SupportedRegions'] = [];
                $n1 = 0;
                foreach ($this->supportedRegions as $item1) {
                    $res['SupportedRegions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SupportedRegions'])) {
            if (!empty($map['SupportedRegions'])) {
                $model->supportedRegions = [];
                $n1 = 0;
                foreach ($map['SupportedRegions'] as $item1) {
                    $model->supportedRegions[$n1] = supportedRegions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
