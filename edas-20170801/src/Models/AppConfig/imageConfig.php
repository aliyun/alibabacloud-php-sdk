<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Tea\Model;

class imageConfig extends Model
{
    /**
     * @var string
     */
    public $containerRegistryId;

    /**
     * @var string
     */
    public $crInstanceId;

    /**
     * @var string
     */
    public $crRegionId;

    /**
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'containerRegistryId' => 'ContainerRegistryId',
        'crInstanceId'        => 'CrInstanceId',
        'crRegionId'          => 'CrRegionId',
        'imageUrl'            => 'ImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerRegistryId) {
            $res['ContainerRegistryId'] = $this->containerRegistryId;
        }
        if (null !== $this->crInstanceId) {
            $res['CrInstanceId'] = $this->crInstanceId;
        }
        if (null !== $this->crRegionId) {
            $res['CrRegionId'] = $this->crRegionId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerRegistryId'])) {
            $model->containerRegistryId = $map['ContainerRegistryId'];
        }
        if (isset($map['CrInstanceId'])) {
            $model->crInstanceId = $map['CrInstanceId'];
        }
        if (isset($map['CrRegionId'])) {
            $model->crRegionId = $map['CrRegionId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}
