<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clusterTemplateId;
    protected $_name = [
        'requestId'         => 'RequestId',
        'clusterTemplateId' => 'ClusterTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterTemplateId) {
            $res['ClusterTemplateId'] = $this->clusterTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterTemplateId'])) {
            $model->clusterTemplateId = $map['ClusterTemplateId'];
        }

        return $model;
    }
}
