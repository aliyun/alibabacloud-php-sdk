<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\relations\domains;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\relations\links;

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
        'links' => 'Links',
    ];

    public function validate()
    {
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        if (\is_array($this->links)) {
            Model::validateArray($this->links);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->links) {
            if (\is_array($this->links)) {
                $res['Links'] = [];
                $n1 = 0;
                foreach ($this->links as $item1) {
                    $res['Links'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1] = domains::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Links'])) {
            if (!empty($map['Links'])) {
                $model->links = [];
                $n1 = 0;
                foreach ($map['Links'] as $item1) {
                    $model->links[$n1] = links::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
