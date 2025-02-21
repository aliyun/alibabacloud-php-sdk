<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class AckNodePool extends Model
{
    /**
     * @var string
     */
    public $nodePoolId;
    /**
     * @var AckNodeSelector
     */
    public $nodeSelector;
    protected $_name = [
        'nodePoolId'   => 'NodePoolId',
        'nodeSelector' => 'NodeSelector',
    ];

    public function validate()
    {
        if (null !== $this->nodeSelector) {
            $this->nodeSelector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodePoolId) {
            $res['NodePoolId'] = $this->nodePoolId;
        }

        if (null !== $this->nodeSelector) {
            $res['NodeSelector'] = null !== $this->nodeSelector ? $this->nodeSelector->toArray($noStream) : $this->nodeSelector;
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
        if (isset($map['NodePoolId'])) {
            $model->nodePoolId = $map['NodePoolId'];
        }

        if (isset($map['NodeSelector'])) {
            $model->nodeSelector = AckNodeSelector::fromMap($map['NodeSelector']);
        }

        return $model;
    }
}
