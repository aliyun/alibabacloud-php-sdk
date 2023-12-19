<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeCrossAccountsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeCrossAccountsResponseBody\crossAccounts\crossAccount;
use AlibabaCloud\Tea\Model;

class crossAccounts extends Model
{
    /**
     * @var crossAccount[]
     */
    public $crossAccount;
    protected $_name = [
        'crossAccount' => 'CrossAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossAccount) {
            $res['CrossAccount'] = [];
            if (null !== $this->crossAccount && \is_array($this->crossAccount)) {
                $n = 0;
                foreach ($this->crossAccount as $item) {
                    $res['CrossAccount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return crossAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossAccount'])) {
            if (!empty($map['CrossAccount'])) {
                $model->crossAccount = [];
                $n                   = 0;
                foreach ($map['CrossAccount'] as $item) {
                    $model->crossAccount[$n++] = null !== $item ? crossAccount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
