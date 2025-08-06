<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponseBody\bandwidthPackages\bandwidthPackage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponseBody\bandwidthPackages\bandwidthPackage\publicIpAddresses\publicIpAddresse;

class publicIpAddresses extends Model
{
    /**
     * @var publicIpAddresse[]
     */
    public $publicIpAddresse;
    protected $_name = [
        'publicIpAddresse' => 'PublicIpAddresse',
    ];

    public function validate()
    {
        if (\is_array($this->publicIpAddresse)) {
            Model::validateArray($this->publicIpAddresse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicIpAddresse) {
            if (\is_array($this->publicIpAddresse)) {
                $res['PublicIpAddresse'] = [];
                $n1 = 0;
                foreach ($this->publicIpAddresse as $item1) {
                    $res['PublicIpAddresse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PublicIpAddresse'])) {
            if (!empty($map['PublicIpAddresse'])) {
                $model->publicIpAddresse = [];
                $n1 = 0;
                foreach ($map['PublicIpAddresse'] as $item1) {
                    $model->publicIpAddresse[$n1] = publicIpAddresse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
