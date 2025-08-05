<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault;

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
        if (\is_array($this->vault)) {
            Model::validateArray($this->vault);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vault) {
            if (\is_array($this->vault)) {
                $res['Vault'] = [];
                $n1 = 0;
                foreach ($this->vault as $item1) {
                    $res['Vault'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Vault'])) {
            if (!empty($map['Vault'])) {
                $model->vault = [];
                $n1 = 0;
                foreach ($map['Vault'] as $item1) {
                    $model->vault[$n1] = vault::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
