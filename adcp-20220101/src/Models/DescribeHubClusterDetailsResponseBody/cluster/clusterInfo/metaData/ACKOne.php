<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo\metaData;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo\metaData\ACKOne\gitOps;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo\metaData\ACKOne\workFlow;
use AlibabaCloud\Tea\Model;

class ACKOne extends Model
{
    /**
     * @description The GitOps metadata.
     *
     * @var gitOps
     */
    public $gitOps;

    /**
     * @description The workflow metadata.
     *
     * @var workFlow
     */
    public $workFlow;
    protected $_name = [
        'gitOps'   => 'GitOps',
        'workFlow' => 'WorkFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gitOps) {
            $res['GitOps'] = null !== $this->gitOps ? $this->gitOps->toMap() : null;
        }
        if (null !== $this->workFlow) {
            $res['WorkFlow'] = null !== $this->workFlow ? $this->workFlow->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ACKOne
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GitOps'])) {
            $model->gitOps = gitOps::fromMap($map['GitOps']);
        }
        if (isset($map['WorkFlow'])) {
            $model->workFlow = workFlow::fromMap($map['WorkFlow']);
        }

        return $model;
    }
}
