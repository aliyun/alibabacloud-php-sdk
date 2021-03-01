<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSubAccountResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListSubAccountResponseBody\subAccountList\subAccount;
use AlibabaCloud\Tea\Model;

class subAccountList extends Model
{
    /**
     * @var subAccount[]
     */
    public $subAccount;
    protected $_name = [
        'subAccount' => 'SubAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subAccount) {
            $res['SubAccount'] = [];
            if (null !== $this->subAccount && \is_array($this->subAccount)) {
                $n = 0;
                foreach ($this->subAccount as $item) {
                    $res['SubAccount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subAccountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubAccount'])) {
            if (!empty($map['SubAccount'])) {
                $model->subAccount = [];
                $n                 = 0;
                foreach ($map['SubAccount'] as $item) {
                    $model->subAccount[$n++] = null !== $item ? subAccount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
