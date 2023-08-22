<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest\config;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest\fsLayers;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest\history;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest\layers;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest\signatures;
use AlibabaCloud\Tea\Model;

class manifest extends Model
{
    /**
     * @description Architecture.
     *
     * @example null
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The configuration information.
     *
     * @var config
     */
    public $config;

    /**
     * @description The digest of the referenced filesystem image layer.
     *
     * @var fsLayers[]
     */
    public $fsLayers;

    /**
     * @description A list of unstructured historical data for V1 compatibility.
     *
     * @var history[]
     */
    public $history;

    /**
     * @description The information about image layers.
     *
     * @var layers[]
     */
    public $layers;

    /**
     * @description The type.
     *
     * @example application/vnd.docker.distribution.manifest.v2+json
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The name.
     *
     * @example null
     *
     * @var string
     */
    public $name;

    /**
     * @description The schema version of the manifest.
     *
     * @example 2
     *
     * @var int
     */
    public $schemaVersion;

    /**
     * @description The information about signatures.
     *
     * @var signatures[]
     */
    public $signatures;

    /**
     * @description The tag of the image.
     *
     * @example master
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'architecture'  => 'Architecture',
        'config'        => 'Config',
        'fsLayers'      => 'FsLayers',
        'history'       => 'History',
        'layers'        => 'Layers',
        'mediaType'     => 'MediaType',
        'name'          => 'Name',
        'schemaVersion' => 'SchemaVersion',
        'signatures'    => 'Signatures',
        'tag'           => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->fsLayers) {
            $res['FsLayers'] = [];
            if (null !== $this->fsLayers && \is_array($this->fsLayers)) {
                $n = 0;
                foreach ($this->fsLayers as $item) {
                    $res['FsLayers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->history) {
            $res['History'] = [];
            if (null !== $this->history && \is_array($this->history)) {
                $n = 0;
                foreach ($this->history as $item) {
                    $res['History'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->layers) {
            $res['Layers'] = [];
            if (null !== $this->layers && \is_array($this->layers)) {
                $n = 0;
                foreach ($this->layers as $item) {
                    $res['Layers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }
        if (null !== $this->signatures) {
            $res['Signatures'] = [];
            if (null !== $this->signatures && \is_array($this->signatures)) {
                $n = 0;
                foreach ($this->signatures as $item) {
                    $res['Signatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return manifest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['FsLayers'])) {
            if (!empty($map['FsLayers'])) {
                $model->fsLayers = [];
                $n               = 0;
                foreach ($map['FsLayers'] as $item) {
                    $model->fsLayers[$n++] = null !== $item ? fsLayers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['History'])) {
            if (!empty($map['History'])) {
                $model->history = [];
                $n              = 0;
                foreach ($map['History'] as $item) {
                    $model->history[$n++] = null !== $item ? history::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Layers'])) {
            if (!empty($map['Layers'])) {
                $model->layers = [];
                $n             = 0;
                foreach ($map['Layers'] as $item) {
                    $model->layers[$n++] = null !== $item ? layers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }
        if (isset($map['Signatures'])) {
            if (!empty($map['Signatures'])) {
                $model->signatures = [];
                $n                 = 0;
                foreach ($map['Signatures'] as $item) {
                    $model->signatures[$n++] = null !== $item ? signatures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
