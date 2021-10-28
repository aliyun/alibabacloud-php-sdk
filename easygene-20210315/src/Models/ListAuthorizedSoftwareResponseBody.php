<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListAuthorizedSoftwareResponseBody\softwares;
use AlibabaCloud\Tea\Model;

class ListAuthorizedSoftwareResponseBody extends Model
{
    /**
     * @description 主机ID
     *
     * @var string
     */
    public $hostId;

    /**
     * @description 分页数
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕
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
     * @description 软件信息
     *
     * @var softwares[]
     */
    public $softwares;

    /**
     * @description 总记录数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hostId'     => 'HostId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'softwares'  => 'Softwares',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->softwares) {
            $res['Softwares'] = [];
            if (null !== $this->softwares && \is_array($this->softwares)) {
                $n = 0;
                foreach ($this->softwares as $item) {
                    $res['Softwares'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAuthorizedSoftwareResponseBody
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
        if (isset($map['Softwares'])) {
            if (!empty($map['Softwares'])) {
                $model->softwares = [];
                $n                = 0;
                foreach ($map['Softwares'] as $item) {
                    $model->softwares[$n++] = null !== $item ? softwares::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
