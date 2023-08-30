<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterRequest;

use AlibabaCloud\Tea\Model;

class namespaceInfos extends Model
{
    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $mseNamespace;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'labels'       => 'labels',
        'mseNamespace' => 'mseNamespace',
        'name'         => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->mseNamespace) {
            $res['mseNamespace'] = $this->mseNamespace;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['mseNamespace'])) {
            $model->mseNamespace = $map['mseNamespace'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
