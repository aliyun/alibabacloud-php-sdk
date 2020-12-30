<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetUserInputStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserInputStatisticInfoResponseBody\userInputList\clusterStatUserInput;
use AlibabaCloud\Tea\Model;

class userInputList extends Model
{
    /**
     * @var clusterStatUserInput[]
     */
    public $clusterStatUserInput;
    protected $_name = [
        'clusterStatUserInput' => 'ClusterStatUserInput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatUserInput) {
            $res['ClusterStatUserInput'] = [];
            if (null !== $this->clusterStatUserInput && \is_array($this->clusterStatUserInput)) {
                $n = 0;
                foreach ($this->clusterStatUserInput as $item) {
                    $res['ClusterStatUserInput'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatUserInput'])) {
            if (!empty($map['ClusterStatUserInput'])) {
                $model->clusterStatUserInput = [];
                $n                           = 0;
                foreach ($map['ClusterStatUserInput'] as $item) {
                    $model->clusterStatUserInput[$n++] = null !== $item ? clusterStatUserInput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
