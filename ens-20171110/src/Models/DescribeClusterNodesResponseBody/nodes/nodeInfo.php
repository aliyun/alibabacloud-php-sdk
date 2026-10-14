<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodesResponseBody\nodes;

use AlibabaCloud\Dara\Model;

class nodeInfo extends Model
{
    /**
     * @var string
     */
    public $containerRuntimeVersion;

    /**
     * @var string
     */
    public $kubeletVersion;

    /**
     * @var string
     */
    public $osImage;
    protected $_name = [
        'containerRuntimeVersion' => 'ContainerRuntimeVersion',
        'kubeletVersion' => 'KubeletVersion',
        'osImage' => 'OsImage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerRuntimeVersion) {
            $res['ContainerRuntimeVersion'] = $this->containerRuntimeVersion;
        }

        if (null !== $this->kubeletVersion) {
            $res['KubeletVersion'] = $this->kubeletVersion;
        }

        if (null !== $this->osImage) {
            $res['OsImage'] = $this->osImage;
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
        if (isset($map['ContainerRuntimeVersion'])) {
            $model->containerRuntimeVersion = $map['ContainerRuntimeVersion'];
        }

        if (isset($map['KubeletVersion'])) {
            $model->kubeletVersion = $map['KubeletVersion'];
        }

        if (isset($map['OsImage'])) {
            $model->osImage = $map['OsImage'];
        }

        return $model;
    }
}
