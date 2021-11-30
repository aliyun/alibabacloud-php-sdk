<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagLayersResponseBody;

use AlibabaCloud\Tea\Model;

class layers extends Model
{
    /**
     * @var string
     */
    public $blobDigest;

    /**
     * @var int
     */
    public $blobSize;

    /**
     * @var string
     */
    public $layerCMD;

    /**
     * @var int
     */
    public $layerIndex;

    /**
     * @var string
     */
    public $layerInstruction;
    protected $_name = [
        'blobDigest'       => 'BlobDigest',
        'blobSize'         => 'BlobSize',
        'layerCMD'         => 'LayerCMD',
        'layerIndex'       => 'LayerIndex',
        'layerInstruction' => 'LayerInstruction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blobDigest) {
            $res['BlobDigest'] = $this->blobDigest;
        }
        if (null !== $this->blobSize) {
            $res['BlobSize'] = $this->blobSize;
        }
        if (null !== $this->layerCMD) {
            $res['LayerCMD'] = $this->layerCMD;
        }
        if (null !== $this->layerIndex) {
            $res['LayerIndex'] = $this->layerIndex;
        }
        if (null !== $this->layerInstruction) {
            $res['LayerInstruction'] = $this->layerInstruction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlobDigest'])) {
            $model->blobDigest = $map['BlobDigest'];
        }
        if (isset($map['BlobSize'])) {
            $model->blobSize = $map['BlobSize'];
        }
        if (isset($map['LayerCMD'])) {
            $model->layerCMD = $map['LayerCMD'];
        }
        if (isset($map['LayerIndex'])) {
            $model->layerIndex = $map['LayerIndex'];
        }
        if (isset($map['LayerInstruction'])) {
            $model->layerInstruction = $map['LayerInstruction'];
        }

        return $model;
    }
}
