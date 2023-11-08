<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeCensResponseBody extends Model
{
    /**
     * @description The list of Kubernetes clusters that are added to the same ASM instance but are in different VPCs and are not connected by using a Cloud Enterprise Network (CEN) instance.
     *
     * @var string[]
     */
    public $clusters;

    /**
     * @description The request ID.
     *
     * @example BD65C0AD-D3C6-48D3-8D93-38D2015C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusters'  => 'Clusters',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['Clusters'] = $this->clusters;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCensResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = $map['Clusters'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
