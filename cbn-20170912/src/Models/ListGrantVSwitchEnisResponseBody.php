<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListGrantVSwitchEnisResponseBody\grantVSwitchEnis;

class ListGrantVSwitchEnisResponseBody extends Model
{
    /**
     * @var grantVSwitchEnis[]
     */
    public $grantVSwitchEnis;

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
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'grantVSwitchEnis' => 'GrantVSwitchEnis',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->grantVSwitchEnis)) {
            Model::validateArray($this->grantVSwitchEnis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantVSwitchEnis) {
            if (\is_array($this->grantVSwitchEnis)) {
                $res['GrantVSwitchEnis'] = [];
                $n1 = 0;
                foreach ($this->grantVSwitchEnis as $item1) {
                    $res['GrantVSwitchEnis'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantVSwitchEnis'])) {
            if (!empty($map['GrantVSwitchEnis'])) {
                $model->grantVSwitchEnis = [];
                $n1 = 0;
                foreach ($map['GrantVSwitchEnis'] as $item1) {
                    $model->grantVSwitchEnis[$n1++] = grantVSwitchEnis::fromMap($item1);
                }
            }
        }

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

        return $model;
    }
}
