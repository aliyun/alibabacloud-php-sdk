<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterTemplateId;

    /**
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
     * @return ModifyClusterTemplateResponseBody
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
