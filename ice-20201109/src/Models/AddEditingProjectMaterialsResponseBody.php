<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponseBody\liveMaterials;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponseBody\mediaInfos;

class AddEditingProjectMaterialsResponseBody extends Model
{
    /**
     * @var liveMaterials[]
     */
    public $liveMaterials;
    /**
     * @var mediaInfos[]
     */
    public $mediaInfos;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string[]
     */
    public $projectMaterials;
    /**
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
        if (\is_array($this->liveMaterials)) {
            Model::validateArray($this->liveMaterials);
        }
        if (\is_array($this->mediaInfos)) {
            Model::validateArray($this->mediaInfos);
        }
        if (\is_array($this->projectMaterials)) {
            Model::validateArray($this->projectMaterials);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveMaterials) {
            if (\is_array($this->liveMaterials)) {
                $res['LiveMaterials'] = [];
                $n1                   = 0;
                foreach ($this->liveMaterials as $item1) {
                    $res['LiveMaterials'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->mediaInfos) {
            if (\is_array($this->mediaInfos)) {
                $res['MediaInfos'] = [];
                $n1                = 0;
                foreach ($this->mediaInfos as $item1) {
                    $res['MediaInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectMaterials) {
            if (\is_array($this->projectMaterials)) {
                $res['ProjectMaterials'] = [];
                $n1                      = 0;
                foreach ($this->projectMaterials as $item1) {
                    $res['ProjectMaterials'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LiveMaterials'])) {
            if (!empty($map['LiveMaterials'])) {
                $model->liveMaterials = [];
                $n1                   = 0;
                foreach ($map['LiveMaterials'] as $item1) {
                    $model->liveMaterials[$n1++] = liveMaterials::fromMap($item1);
                }
            }
        }

        if (isset($map['MediaInfos'])) {
            if (!empty($map['MediaInfos'])) {
                $model->mediaInfos = [];
                $n1                = 0;
                foreach ($map['MediaInfos'] as $item1) {
                    $model->mediaInfos[$n1++] = mediaInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectMaterials'])) {
            if (!empty($map['ProjectMaterials'])) {
                $model->projectMaterials = [];
                $n1                      = 0;
                foreach ($map['ProjectMaterials'] as $item1) {
                    $model->projectMaterials[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
