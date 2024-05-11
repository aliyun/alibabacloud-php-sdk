<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListExperimentVersionsResponseBody\experimentVersions;
use AlibabaCloud\Tea\Model;

class ListExperimentVersionsResponseBody extends Model
{
    /**
     * @var experimentVersions[]
     */
    public $experimentVersions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'experimentVersions' => 'ExperimentVersions',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentVersions) {
            $res['ExperimentVersions'] = [];
            if (null !== $this->experimentVersions && \is_array($this->experimentVersions)) {
                $n = 0;
                foreach ($this->experimentVersions as $item) {
                    $res['ExperimentVersions'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListExperimentVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentVersions'])) {
            if (!empty($map['ExperimentVersions'])) {
                $model->experimentVersions = [];
                $n                         = 0;
                foreach ($map['ExperimentVersions'] as $item) {
                    $model->experimentVersions[$n++] = null !== $item ? experimentVersions::fromMap($item) : $item;
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
