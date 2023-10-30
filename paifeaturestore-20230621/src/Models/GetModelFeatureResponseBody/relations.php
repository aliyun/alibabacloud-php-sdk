<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\relations\domains;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\relations\links;
use AlibabaCloud\Tea\Model;

class relations extends Model
{
    /**
     * @var domains[]
     */
    public $domains;

    /**
     * @var links[]
     */
    public $links;
    protected $_name = [
        'domains' => 'Domains',
        'links'   => 'Links',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = [];
            if (null !== $this->domains && \is_array($this->domains)) {
                $n = 0;
                foreach ($this->domains as $item) {
                    $res['Domains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->links) {
            $res['Links'] = [];
            if (null !== $this->links && \is_array($this->links)) {
                $n = 0;
                foreach ($this->links as $item) {
                    $res['Links'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n              = 0;
                foreach ($map['Domains'] as $item) {
                    $model->domains[$n++] = null !== $item ? domains::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Links'])) {
            if (!empty($map['Links'])) {
                $model->links = [];
                $n            = 0;
                foreach ($map['Links'] as $item) {
                    $model->links[$n++] = null !== $item ? links::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
