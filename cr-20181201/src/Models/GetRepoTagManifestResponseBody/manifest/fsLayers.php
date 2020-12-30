<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest;

use AlibabaCloud\Tea\Model;

class fsLayers extends Model
{
    /**
     * @var string
     */
    public $blobSum;
    protected $_name = [
        'blobSum' => 'BlobSum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blobSum) {
            $res['BlobSum'] = $this->blobSum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fsLayers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlobSum'])) {
            $model->blobSum = $map['BlobSum'];
        }

        return $model;
    }
}
