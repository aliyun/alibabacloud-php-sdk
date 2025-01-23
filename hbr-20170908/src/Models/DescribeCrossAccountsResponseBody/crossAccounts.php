<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeCrossAccountsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeCrossAccountsResponseBody\crossAccounts\crossAccount;

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
        if (\is_array($this->crossAccount)) {
            Model::validateArray($this->crossAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossAccount) {
            if (\is_array($this->crossAccount)) {
                $res['CrossAccount'] = [];
                $n1                  = 0;
                foreach ($this->crossAccount as $item1) {
                    $res['CrossAccount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CrossAccount'])) {
            if (!empty($map['CrossAccount'])) {
                $model->crossAccount = [];
                $n1                  = 0;
                foreach ($map['CrossAccount'] as $item1) {
                    $model->crossAccount[$n1++] = crossAccount::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
