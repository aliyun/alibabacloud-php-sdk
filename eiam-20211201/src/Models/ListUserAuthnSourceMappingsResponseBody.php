<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUserAuthnSourceMappingsResponseBody\userAuthnSourceMappings;

class ListUserAuthnSourceMappingsResponseBody extends Model
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
    public $previousToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var userAuthnSourceMappings[]
     */
    public $userAuthnSourceMappings;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'previousToken' => 'PreviousToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'userAuthnSourceMappings' => 'UserAuthnSourceMappings',
    ];

    public function validate()
    {
        if (\is_array($this->userAuthnSourceMappings)) {
            Model::validateArray($this->userAuthnSourceMappings);
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

        if (null !== $this->previousToken) {
            $res['PreviousToken'] = $this->previousToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userAuthnSourceMappings) {
            if (\is_array($this->userAuthnSourceMappings)) {
                $res['UserAuthnSourceMappings'] = [];
                $n1 = 0;
                foreach ($this->userAuthnSourceMappings as $item1) {
                    $res['UserAuthnSourceMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['PreviousToken'])) {
            $model->previousToken = $map['PreviousToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserAuthnSourceMappings'])) {
            if (!empty($map['UserAuthnSourceMappings'])) {
                $model->userAuthnSourceMappings = [];
                $n1 = 0;
                foreach ($map['UserAuthnSourceMappings'] as $item1) {
                    $model->userAuthnSourceMappings[$n1] = userAuthnSourceMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
