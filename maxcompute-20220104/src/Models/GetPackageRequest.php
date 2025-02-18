<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetPackageRequest extends Model
{
    /**
     * @var string
     */
    public $sourceProject;
    protected $_name = [
        'sourceProject' => 'sourceProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceProject) {
            $res['sourceProject'] = $this->sourceProject;
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
        if (isset($map['sourceProject'])) {
            $model->sourceProject = $map['sourceProject'];
        }

        return $model;
    }
}
