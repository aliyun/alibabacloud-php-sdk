<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSubAccountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSubAccountResponseBody\subAccountList\subAccount;

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
        if (\is_array($this->subAccount)) {
            Model::validateArray($this->subAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subAccount) {
            if (\is_array($this->subAccount)) {
                $res['SubAccount'] = [];
                $n1 = 0;
                foreach ($this->subAccount as $item1) {
                    $res['SubAccount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SubAccount'])) {
            if (!empty($map['SubAccount'])) {
                $model->subAccount = [];
                $n1 = 0;
                foreach ($map['SubAccount'] as $item1) {
                    $model->subAccount[$n1] = subAccount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
