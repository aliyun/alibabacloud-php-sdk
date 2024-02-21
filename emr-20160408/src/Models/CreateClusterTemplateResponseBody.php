<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterTemplateResponseBody extends Model
{
    /**
     * @example CT-35498C56B3F1****
     *
     * @var string
     */
    public $clusterTemplateId;

    /**
     * @example 8CA40D40-2092-4A09-9F07-2F9C1399FB11
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterTemplateId' => 'ClusterTemplateId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTemplateId) {
            $res['ClusterTemplateId'] = $this->clusterTemplateId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ClusterTemplateId'])) {
            $model->clusterTemplateId = $map['ClusterTemplateId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
