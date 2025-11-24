<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\extraConfiguration\playground;

class extraConfiguration extends Model
{
    /**
     * @var playground
     */
    public $playground;
    protected $_name = [
        'playground' => 'Playground',
    ];

    public function validate()
    {
        if (null !== $this->playground) {
            $this->playground->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playground) {
            $res['Playground'] = null !== $this->playground ? $this->playground->toArray($noStream) : $this->playground;
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
        if (isset($map['Playground'])) {
            $model->playground = playground::fromMap($map['Playground']);
        }

        return $model;
    }
}
