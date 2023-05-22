<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class meshStatus extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $inMesh;
    protected $_name = [
        'inMesh' => 'InMesh',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inMesh) {
            $res['InMesh'] = $this->inMesh;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meshStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InMesh'])) {
            $model->inMesh = $map['InMesh'];
        }

        return $model;
    }
}
