<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The digest of the image.
     *
     * @example sha256:b5b2b2c507a0944348e0303114d8d93aaaa081732b86451d9bce1f432a537bc7
     *
     * @var string
     */
    public $digest;

    /**
     * @description The MIME type of the configuration file.
     *
     * @example application/vnd.docker.container.image.v1+json
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description Size
     *
     * @example 7023
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'digest'    => 'Digest',
        'mediaType' => 'MediaType',
        'size'      => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
