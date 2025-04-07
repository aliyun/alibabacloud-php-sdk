<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactRisksResponseBody\artifactRiskList;
use AlibabaCloud\Tea\Model;

class ListArtifactRisksResponseBody extends Model
{
    /**
     * @description List of artifact risks
     *
     * @var artifactRiskList[]
     */
    public $artifactRiskList;

    /**
     * @description Request ID.
     *
     * @example 52919DB1-03A0-55F5-BDD4-DB6DEBB8267A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'artifactRiskList' => 'ArtifactRiskList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactRiskList) {
            $res['ArtifactRiskList'] = [];
            if (null !== $this->artifactRiskList && \is_array($this->artifactRiskList)) {
                $n = 0;
                foreach ($this->artifactRiskList as $item) {
                    $res['ArtifactRiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListArtifactRisksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactRiskList'])) {
            if (!empty($map['ArtifactRiskList'])) {
                $model->artifactRiskList = [];
                $n = 0;
                foreach ($map['ArtifactRiskList'] as $item) {
                    $model->artifactRiskList[$n++] = null !== $item ? artifactRiskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
