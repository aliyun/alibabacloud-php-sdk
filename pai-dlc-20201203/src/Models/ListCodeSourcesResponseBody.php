<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListCodeSourcesResponseBody extends Model
{
    /**
     * @description 代码源配置列表
     *
     * @var CodeSourceItem[]
     */
    public $codeSources;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 符合过滤条件的代码源配置的总数量
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'codeSources' => 'CodeSources',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeSources) {
            $res['CodeSources'] = [];
            if (null !== $this->codeSources && \is_array($this->codeSources)) {
                $n = 0;
                foreach ($this->codeSources as $item) {
                    $res['CodeSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCodeSourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeSources'])) {
            if (!empty($map['CodeSources'])) {
                $model->codeSources = [];
                $n                  = 0;
                foreach ($map['CodeSources'] as $item) {
                    $model->codeSources[$n++] = null !== $item ? CodeSourceItem::fromMap($item) : $item;
                }
            }
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
