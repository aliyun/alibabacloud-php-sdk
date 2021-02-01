<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models\ReconstructBodyBySingleImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $depthURL;

    /**
     * @var string
     */
    public $meshURL;
    protected $_name = [
        'depthURL' => 'DepthURL',
        'meshURL'  => 'MeshURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depthURL) {
            $res['DepthURL'] = $this->depthURL;
        }
        if (null !== $this->meshURL) {
            $res['MeshURL'] = $this->meshURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepthURL'])) {
            $model->depthURL = $map['DepthURL'];
        }
        if (isset($map['MeshURL'])) {
            $model->meshURL = $map['MeshURL'];
        }

        return $model;
    }
}
