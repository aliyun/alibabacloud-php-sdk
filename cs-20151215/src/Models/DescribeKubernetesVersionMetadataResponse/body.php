<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse\body\images;
use AlibabaCloud\SDK\CS\V20151215\Models\Runtime;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description Features of the queried Kubernetes version.
     *
     * @var mixed[]
     */
    public $capabilities;

    /**
     * @description The OS images that are returned.
     *
     * @var images[]
     */
    public $images;

    /**
     * @description The metadata of the Kubernetes version.
     *
     * @var mixed[]
     */
    public $metaData;

    /**
     * @description Details of the supported container runtimes.
     *
     * @var Runtime[]
     */
    public $runtimes;

    /**
     * @description The Kubernetes version that is supported by ACK. For more information, see [Release notes for Kubernetes versions](https://help.aliyun.com/document_detail/185269.html).
     *
     * @example 1.16.9-aliyun.1
     *
     * @var string
     */
    public $version;

    /**
     * @description The release date of the Kubernetes version.
     *
     * @example 2023-04-30T00:00:00Z
     *
     * @var string
     */
    public $releaseDate;

    /**
     * @description The expiration date of the Kubernetes version.
     *
     * @example 2025-04-30T00:00:00Z
     *
     * @var string
     */
    public $expirationDate;

    /**
     * @description Indicates whether you can create clusters that run the Kubernetes version.
     *
     * @example true
     *
     * @var bool
     */
    public $creatable;
    protected $_name = [
        'capabilities'   => 'capabilities',
        'images'         => 'images',
        'metaData'       => 'meta_data',
        'runtimes'       => 'runtimes',
        'version'        => 'version',
        'releaseDate'    => 'release_date',
        'expirationDate' => 'expiration_date',
        'creatable'      => 'creatable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capabilities) {
            $res['capabilities'] = $this->capabilities;
        }
        if (null !== $this->images) {
            $res['images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metaData) {
            $res['meta_data'] = $this->metaData;
        }
        if (null !== $this->runtimes) {
            $res['runtimes'] = [];
            if (null !== $this->runtimes && \is_array($this->runtimes)) {
                $n = 0;
                foreach ($this->runtimes as $item) {
                    $res['runtimes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->releaseDate) {
            $res['release_date'] = $this->releaseDate;
        }
        if (null !== $this->expirationDate) {
            $res['expiration_date'] = $this->expirationDate;
        }
        if (null !== $this->creatable) {
            $res['creatable'] = $this->creatable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['capabilities'])) {
            $model->capabilities = $map['capabilities'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['meta_data'])) {
            $model->metaData = $map['meta_data'];
        }
        if (isset($map['runtimes'])) {
            if (!empty($map['runtimes'])) {
                $model->runtimes = [];
                $n               = 0;
                foreach ($map['runtimes'] as $item) {
                    $model->runtimes[$n++] = null !== $item ? Runtime::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['release_date'])) {
            $model->releaseDate = $map['release_date'];
        }
        if (isset($map['expiration_date'])) {
            $model->expirationDate = $map['expiration_date'];
        }
        if (isset($map['creatable'])) {
            $model->creatable = $map['creatable'];
        }

        return $model;
    }
}
