<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmVersionsResponseBody\algorithmVersions;

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
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->algorithmVersions)) {
            Model::validateArray($this->algorithmVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmVersions) {
            if (\is_array($this->algorithmVersions)) {
                $res['AlgorithmVersions'] = [];
                $n1 = 0;
                foreach ($this->algorithmVersions as $item1) {
                    $res['AlgorithmVersions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmVersions'])) {
            if (!empty($map['AlgorithmVersions'])) {
                $model->algorithmVersions = [];
                $n1 = 0;
                foreach ($map['AlgorithmVersions'] as $item1) {
                    $model->algorithmVersions[$n1++] = algorithmVersions::fromMap($item1);
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
