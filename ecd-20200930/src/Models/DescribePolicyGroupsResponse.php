<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse\describePolicyGroups;
use AlibabaCloud\Tea\Model;

class DescribePolicyGroupsResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var describePolicyGroups[]
     */
    public $describePolicyGroups;
    protected $_name = [
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'describePolicyGroups' => 'DescribePolicyGroups',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('describePolicyGroups', $this->describePolicyGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->describePolicyGroups) {
            $res['DescribePolicyGroups'] = [];
            if (null !== $this->describePolicyGroups && \is_array($this->describePolicyGroups)) {
                $n = 0;
                foreach ($this->describePolicyGroups as $item) {
                    $res['DescribePolicyGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyGroupsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DescribePolicyGroups'])) {
            if (!empty($map['DescribePolicyGroups'])) {
                $model->describePolicyGroups = [];
                $n                           = 0;
                foreach ($map['DescribePolicyGroups'] as $item) {
                    $model->describePolicyGroups[$n++] = null !== $item ? describePolicyGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
