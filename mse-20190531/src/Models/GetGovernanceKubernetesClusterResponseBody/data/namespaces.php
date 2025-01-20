<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterResponseBody\data;

use AlibabaCloud\Dara\Model;

class namespaces extends Model
{
    /**
     * @var string
     */
    public $mseNamespace;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'mseNamespace' => 'MseNamespace',
        'name'         => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mseNamespace) {
            $res['MseNamespace'] = $this->mseNamespace;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['MseNamespace'])) {
            $model->mseNamespace = $map['MseNamespace'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
