<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetVpcConfigResponseBody\trustedVpcs;

class GetVpcConfigResponseBody extends Model
{
    /**
     * @var trustedVpcs[]
     */
    public $trustedVpcs;
    protected $_name = [
        'trustedVpcs' => 'trustedVpcs',
    ];

    public function validate()
    {
        if (\is_array($this->trustedVpcs)) {
            Model::validateArray($this->trustedVpcs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trustedVpcs) {
            if (\is_array($this->trustedVpcs)) {
                $res['trustedVpcs'] = [];
                $n1 = 0;
                foreach ($this->trustedVpcs as $item1) {
                    $res['trustedVpcs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['trustedVpcs'])) {
            if (!empty($map['trustedVpcs'])) {
                $model->trustedVpcs = [];
                $n1 = 0;
                foreach ($map['trustedVpcs'] as $item1) {
                    $model->trustedVpcs[$n1] = trustedVpcs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
