<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmVersionsResponseBody\algorithmVersions;
use AlibabaCloud\Tea\Model;

class ListAlgorithmVersionsResponseBody extends Model
{
    /**
     * @var algorithmVersions[]
     */
    public $algorithmVersions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'algorithmVersions' => 'AlgorithmVersions',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmVersions) {
            $res['AlgorithmVersions'] = [];
            if (null !== $this->algorithmVersions && \is_array($this->algorithmVersions)) {
                $n = 0;
                foreach ($this->algorithmVersions as $item) {
                    $res['AlgorithmVersions'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAlgorithmVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmVersions'])) {
            if (!empty($map['AlgorithmVersions'])) {
                $model->algorithmVersions = [];
                $n                        = 0;
                foreach ($map['AlgorithmVersions'] as $item) {
                    $model->algorithmVersions[$n++] = null !== $item ? algorithmVersions::fromMap($item) : $item;
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
