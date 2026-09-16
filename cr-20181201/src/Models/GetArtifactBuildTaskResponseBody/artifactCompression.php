<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody;

use AlibabaCloud\Dara\Model;

class artifactCompression extends Model
{
    /**
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $squashKeepLayers;

    /**
     * @var string
     */
    public $startLayerDigest;
    protected $_name = [
        'platform' => 'Platform',
        'squashKeepLayers' => 'SquashKeepLayers',
        'startLayerDigest' => 'StartLayerDigest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->squashKeepLayers) {
            $res['SquashKeepLayers'] = $this->squashKeepLayers;
        }

        if (null !== $this->startLayerDigest) {
            $res['StartLayerDigest'] = $this->startLayerDigest;
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
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['SquashKeepLayers'])) {
            $model->squashKeepLayers = $map['SquashKeepLayers'];
        }

        if (isset($map['StartLayerDigest'])) {
            $model->startLayerDigest = $map['StartLayerDigest'];
        }

        return $model;
    }
}
