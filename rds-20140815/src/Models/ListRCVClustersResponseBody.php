<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListRCVClustersResponseBody\VClusters;

class ListRCVClustersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var VClusters[]
     */
    public $VClusters;
    protected $_name = [
        'requestId' => 'RequestId',
        'VClusters' => 'VClusters',
    ];

    public function validate()
    {
        if (\is_array($this->VClusters)) {
            Model::validateArray($this->VClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->VClusters) {
            if (\is_array($this->VClusters)) {
                $res['VClusters'] = [];
                $n1 = 0;
                foreach ($this->VClusters as $item1) {
                    $res['VClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VClusters'])) {
            if (!empty($map['VClusters'])) {
                $model->VClusters = [];
                $n1 = 0;
                foreach ($map['VClusters'] as $item1) {
                    $model->VClusters[$n1] = VClusters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
