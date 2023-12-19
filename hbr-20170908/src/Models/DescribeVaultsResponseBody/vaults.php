<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault;
use AlibabaCloud\Tea\Model;

class vaults extends Model
{
    /**
     * @var vault[]
     */
    public $vault;
    protected $_name = [
        'vault' => 'Vault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vault) {
            $res['Vault'] = [];
            if (null !== $this->vault && \is_array($this->vault)) {
                $n = 0;
                foreach ($this->vault as $item) {
                    $res['Vault'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vaults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Vault'])) {
            if (!empty($map['Vault'])) {
                $model->vault = [];
                $n            = 0;
                foreach ($map['Vault'] as $item) {
                    $model->vault[$n++] = null !== $item ? vault::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
