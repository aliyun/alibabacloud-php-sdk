<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo\metaData\ACKOne;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo\metaData\ACKOne\workFlow\argoWorkflow;
use AlibabaCloud\Tea\Model;

class workFlow extends Model
{
    /**
     * @description The Argo workflow metadata.
     *
     * @var argoWorkflow
     */
    public $argoWorkflow;
    protected $_name = [
        'argoWorkflow' => 'ArgoWorkflow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->argoWorkflow) {
            $res['ArgoWorkflow'] = null !== $this->argoWorkflow ? $this->argoWorkflow->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workFlow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArgoWorkflow'])) {
            $model->argoWorkflow = argoWorkflow::fromMap($map['ArgoWorkflow']);
        }

        return $model;
    }
}
