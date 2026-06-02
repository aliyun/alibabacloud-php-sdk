<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appflow\V20230904\Models\ListUserAuthConfigsResponseBody\userAuthConfigs;

class ListUserAuthConfigsResponseBody extends Model
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
     * @var userAuthConfigs[]
     */
    public $userAuthConfigs;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'userAuthConfigs' => 'UserAuthConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->userAuthConfigs)) {
            Model::validateArray($this->userAuthConfigs);
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

        if (null !== $this->userAuthConfigs) {
            if (\is_array($this->userAuthConfigs)) {
                $res['UserAuthConfigs'] = [];
                $n1 = 0;
                foreach ($this->userAuthConfigs as $item1) {
                    $res['UserAuthConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['UserAuthConfigs'])) {
            if (!empty($map['UserAuthConfigs'])) {
                $model->userAuthConfigs = [];
                $n1 = 0;
                foreach ($map['UserAuthConfigs'] as $item1) {
                    $model->userAuthConfigs[$n1] = userAuthConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
