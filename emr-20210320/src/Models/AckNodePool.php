<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\AckNodePool\nodeSelector;
use AlibabaCloud\Tea\Model;

class AckNodePool extends Model
{
    /**
     * @var string
     */
    public $nodePoolId;

    /**
     * @var nodeSelector
     */
    public $nodeSelector;
    protected $_name = [
        'nodePoolId'   => 'NodePoolId',
        'nodeSelector' => 'NodeSelector',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodePoolId) {
            $res['NodePoolId'] = $this->nodePoolId;
        }
        if (null !== $this->nodeSelector) {
            $res['NodeSelector'] = null !== $this->nodeSelector ? $this->nodeSelector->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AckNodePool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodePoolId'])) {
            $model->nodePoolId = $map['NodePoolId'];
        }
        if (isset($map['NodeSelector'])) {
            $model->nodeSelector = nodeSelector::fromMap($map['NodeSelector']);
        }

        return $model;
    }
}
