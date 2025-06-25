<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule\databases\databaseAccounts;

class databases extends Model
{
    /**
     * @var databaseAccounts[]
     */
    public $databaseAccounts;

    /**
     * @var string
     */
    public $databaseId;
    protected $_name = [
        'databaseAccounts' => 'DatabaseAccounts',
        'databaseId' => 'DatabaseId',
    ];

    public function validate()
    {
        if (\is_array($this->databaseAccounts)) {
            Model::validateArray($this->databaseAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseAccounts) {
            if (\is_array($this->databaseAccounts)) {
                $res['DatabaseAccounts'] = [];
                $n1 = 0;
                foreach ($this->databaseAccounts as $item1) {
                    $res['DatabaseAccounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
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
        if (isset($map['DatabaseAccounts'])) {
            if (!empty($map['DatabaseAccounts'])) {
                $model->databaseAccounts = [];
                $n1 = 0;
                foreach ($map['DatabaseAccounts'] as $item1) {
                    $model->databaseAccounts[$n1] = databaseAccounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }

        return $model;
    }
}
