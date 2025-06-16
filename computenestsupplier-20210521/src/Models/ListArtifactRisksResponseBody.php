<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactRisksResponseBody\artifactRiskList;

class ListArtifactRisksResponseBody extends Model
{
    /**
     * @var artifactRiskList[]
     */
    public $artifactRiskList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'artifactRiskList' => 'ArtifactRiskList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->artifactRiskList)) {
            Model::validateArray($this->artifactRiskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactRiskList) {
            if (\is_array($this->artifactRiskList)) {
                $res['ArtifactRiskList'] = [];
                $n1 = 0;
                foreach ($this->artifactRiskList as $item1) {
                    $res['ArtifactRiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ArtifactRiskList'])) {
            if (!empty($map['ArtifactRiskList'])) {
                $model->artifactRiskList = [];
                $n1 = 0;
                foreach ($map['ArtifactRiskList'] as $item1) {
                    $model->artifactRiskList[$n1] = artifactRiskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
