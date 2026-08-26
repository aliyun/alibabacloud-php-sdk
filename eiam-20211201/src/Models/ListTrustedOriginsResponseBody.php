<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListTrustedOriginsResponseBody\trustedOrigins;

class ListTrustedOriginsResponseBody extends Model
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
     * @var int
     */
    public $totalCount;

    /**
     * @var trustedOrigins[]
     */
    public $trustedOrigins;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'trustedOrigins' => 'TrustedOrigins',
    ];

    public function validate()
    {
        if (\is_array($this->trustedOrigins)) {
            Model::validateArray($this->trustedOrigins);
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

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->trustedOrigins) {
            if (\is_array($this->trustedOrigins)) {
                $res['TrustedOrigins'] = [];
                $n1 = 0;
                foreach ($this->trustedOrigins as $item1) {
                    $res['TrustedOrigins'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TrustedOrigins'])) {
            if (!empty($map['TrustedOrigins'])) {
                $model->trustedOrigins = [];
                $n1 = 0;
                foreach ($map['TrustedOrigins'] as $item1) {
                    $model->trustedOrigins[$n1] = trustedOrigins::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
