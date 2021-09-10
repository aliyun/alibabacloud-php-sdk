<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponseBody\liveMaterials;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponseBody\mediaInfos;
use AlibabaCloud\Tea\Model;

class AddEditingProjectMaterialsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @description 符合要求的媒资集合
     *
     * @var mediaInfos[]
     */
    public $mediaInfos;

    /**
     * @var liveMaterials[]
     */
    public $liveMaterials;

    /**
     * @var string
     */
    public $projectMaterials;
    protected $_name = [
        'requestId'        => 'RequestId',
        'projectId'        => 'ProjectId',
        'mediaInfos'       => 'MediaInfos',
        'liveMaterials'    => 'LiveMaterials',
        'projectMaterials' => 'ProjectMaterials',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->mediaInfos) {
            $res['MediaInfos'] = [];
            if (null !== $this->mediaInfos && \is_array($this->mediaInfos)) {
                $n = 0;
                foreach ($this->mediaInfos as $item) {
                    $res['MediaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->liveMaterials) {
            $res['LiveMaterials'] = [];
            if (null !== $this->liveMaterials && \is_array($this->liveMaterials)) {
                $n = 0;
                foreach ($this->liveMaterials as $item) {
                    $res['LiveMaterials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectMaterials) {
            $res['ProjectMaterials'] = $this->projectMaterials;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEditingProjectMaterialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['MediaInfos'])) {
            if (!empty($map['MediaInfos'])) {
                $model->mediaInfos = [];
                $n                 = 0;
                foreach ($map['MediaInfos'] as $item) {
                    $model->mediaInfos[$n++] = null !== $item ? mediaInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LiveMaterials'])) {
            if (!empty($map['LiveMaterials'])) {
                $model->liveMaterials = [];
                $n                    = 0;
                foreach ($map['LiveMaterials'] as $item) {
                    $model->liveMaterials[$n++] = null !== $item ? liveMaterials::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectMaterials'])) {
            $model->projectMaterials = $map['ProjectMaterials'];
        }

        return $model;
    }
}
