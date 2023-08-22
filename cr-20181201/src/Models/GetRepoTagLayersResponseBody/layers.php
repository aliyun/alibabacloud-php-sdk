<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagLayersResponseBody;

use AlibabaCloud\Tea\Model;

class layers extends Model
{
    /**
     * @description The digest of a single image layer.
     *
     * @example sha256:a3ed95caeb02ffe68cdd9fd84406680ae93d633cb16422d00e8a7c22955b46d4
     *
     * @var string
     */
    public $blobDigest;

    /**
     * @description The size of the image layer.
     *
     * @example 32
     *
     * @var int
     */
    public $blobSize;

    /**
     * @description Operation on the image layer.
     *
     * @example ["bash"]
     *
     * @var string
     */
    public $layerCMD;

    /**
     * @description The sequence number of the layer stack.
     *
     * @example 1
     *
     * @var int
     */
    public $layerIndex;

    /**
     * @description The command for the image layer.
     *
     * @example CMD
     *
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
