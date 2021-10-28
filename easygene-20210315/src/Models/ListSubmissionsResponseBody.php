<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListSubmissionsResponseBody\submissions;
use AlibabaCloud\Tea\Model;

class ListSubmissionsResponseBody extends Model
{
    /**
     * @description 主机ID
     *
     * @var string
     */
    public $hostId;

    /**
     * @description 最大返回结果
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 下次查询Token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 投递列表
     *
     * @var submissions[]
     */
    public $submissions;

    /**
     * @description 返回个数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hostId'      => 'HostId',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'submissions' => 'Submissions',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
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
        if (null !== $this->submissions) {
            $res['Submissions'] = [];
            if (null !== $this->submissions && \is_array($this->submissions)) {
                $n = 0;
                foreach ($this->submissions as $item) {
                    $res['Submissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubmissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
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
        if (isset($map['Submissions'])) {
            if (!empty($map['Submissions'])) {
                $model->submissions = [];
                $n                  = 0;
                foreach ($map['Submissions'] as $item) {
                    $model->submissions[$n++] = null !== $item ? submissions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
