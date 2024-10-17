<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsResponseBody\liveMaterials;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsResponseBody\mediaInfos;
use AlibabaCloud\Tea\Model;

class GetEditingProjectMaterialsResponseBody extends Model
{
    /**
     * @description The materials associated with the live stream.
     *
     * @var liveMaterials[]
     */
    public $liveMaterials;

    /**
     * @description The media assets that meet the specified conditions.
     *
     * @var mediaInfos[]
     */
    public $mediaInfos;

    /**
     * @description The project ID.
     *
     * @example *****67ae06542b9b93e0d1c387*****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The materials associated with the editing project. A live stream editing project will be associated with a regular editing project after the live streaming ends.
     *
     * @example *****9b145c5cafc2e057304fcd*****
     *
     * @var string[]
     */
    public $projectMaterials;

    /**
     * @description The request ID.
     *
     * @example ******89-C21D-4B78-AE24-3788B8******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveMaterials'    => 'LiveMaterials',
        'mediaInfos'       => 'MediaInfos',
        'projectId'        => 'ProjectId',
        'projectMaterials' => 'ProjectMaterials',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveMaterials) {
            $res['LiveMaterials'] = [];
            if (null !== $this->liveMaterials && \is_array($this->liveMaterials)) {
                $n = 0;
                foreach ($this->liveMaterials as $item) {
                    $res['LiveMaterials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectMaterials) {
            $res['ProjectMaterials'] = $this->projectMaterials;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEditingProjectMaterialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveMaterials'])) {
            if (!empty($map['LiveMaterials'])) {
                $model->liveMaterials = [];
                $n                    = 0;
                foreach ($map['LiveMaterials'] as $item) {
                    $model->liveMaterials[$n++] = null !== $item ? liveMaterials::fromMap($item) : $item;
                }
            }
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectMaterials'])) {
            if (!empty($map['ProjectMaterials'])) {
                $model->projectMaterials = $map['ProjectMaterials'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
