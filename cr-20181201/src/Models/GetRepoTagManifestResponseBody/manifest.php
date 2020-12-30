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
     * @var history[]
     */
    public $history;

    /**
     * @var int
     */
    public $schemaVersion;

    /**
     * @var layers[]
     */
    public $layers;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var fsLayers[]
     */
    public $fsLayers;

    /**
     * @var signatures[]
     */
    public $signatures;

    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $architecture;
    protected $_name = [
        'history'       => 'History',
        'schemaVersion' => 'SchemaVersion',
        'layers'        => 'Layers',
        'tag'           => 'Tag',
        'name'          => 'Name',
        'mediaType'     => 'MediaType',
        'fsLayers'      => 'FsLayers',
        'signatures'    => 'Signatures',
        'config'        => 'Config',
        'architecture'  => 'Architecture',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->history) {
            $res['History'] = [];
            if (null !== $this->history && \is_array($this->history)) {
                $n = 0;
                foreach ($this->history as $item) {
                    $res['History'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
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
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
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
        if (null !== $this->signatures) {
            $res['Signatures'] = [];
            if (null !== $this->signatures && \is_array($this->signatures)) {
                $n = 0;
                foreach ($this->signatures as $item) {
                    $res['Signatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
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
        if (isset($map['History'])) {
            if (!empty($map['History'])) {
                $model->history = [];
                $n              = 0;
                foreach ($map['History'] as $item) {
                    $model->history[$n++] = null !== $item ? history::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
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
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
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
        if (isset($map['Signatures'])) {
            if (!empty($map['Signatures'])) {
                $model->signatures = [];
                $n                 = 0;
                foreach ($map['Signatures'] as $item) {
                    $model->signatures[$n++] = null !== $item ? signatures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        return $model;
    }
}
