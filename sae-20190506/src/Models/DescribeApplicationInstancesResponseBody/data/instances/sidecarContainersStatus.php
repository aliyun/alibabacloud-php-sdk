<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationInstancesResponseBody\data\instances;

use AlibabaCloud\Dara\Model;

class sidecarContainersStatus extends Model
{
    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $containerStatus;

    /**
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'containerId' => 'ContainerId',
        'containerStatus' => 'ContainerStatus',
        'imageUrl' => 'ImageUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }

        if (null !== $this->containerStatus) {
            $res['ContainerStatus'] = $this->containerStatus;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }

        if (isset($map['ContainerStatus'])) {
            $model->containerStatus = $map['ContainerStatus'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}
