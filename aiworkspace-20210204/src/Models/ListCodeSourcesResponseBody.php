<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListCodeSourcesResponseBody extends Model
{
    /**
     * @var CodeSourceItem[]
     */
    public $codeSources;

    /**
     * @example 5A14FA81-DD4E-******-6343FE44B941
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
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
