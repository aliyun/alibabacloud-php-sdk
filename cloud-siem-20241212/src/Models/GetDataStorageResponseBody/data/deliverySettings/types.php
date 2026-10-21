<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data\deliverySettings;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data\deliverySettings\types\executions;

class types extends Model
{
    /**
     * @var bool
     */
    public $autoIncludeNewAccounts;

    /**
     * @var executions[]
     */
    public $executions;

    /**
     * @var string
     */
    public $logCode;

    /**
     * @var string[]
     */
    public $selectedAccountIds;
    protected $_name = [
        'autoIncludeNewAccounts' => 'AutoIncludeNewAccounts',
        'executions' => 'Executions',
        'logCode' => 'LogCode',
        'selectedAccountIds' => 'SelectedAccountIds',
    ];

    public function validate()
    {
        if (\is_array($this->executions)) {
            Model::validateArray($this->executions);
        }
        if (\is_array($this->selectedAccountIds)) {
            Model::validateArray($this->selectedAccountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoIncludeNewAccounts) {
            $res['AutoIncludeNewAccounts'] = $this->autoIncludeNewAccounts;
        }

        if (null !== $this->executions) {
            if (\is_array($this->executions)) {
                $res['Executions'] = [];
                $n1 = 0;
                foreach ($this->executions as $item1) {
                    $res['Executions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }

        if (null !== $this->selectedAccountIds) {
            if (\is_array($this->selectedAccountIds)) {
                $res['SelectedAccountIds'] = [];
                $n1 = 0;
                foreach ($this->selectedAccountIds as $item1) {
                    $res['SelectedAccountIds'][$n1] = $item1;
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
        if (isset($map['AutoIncludeNewAccounts'])) {
            $model->autoIncludeNewAccounts = $map['AutoIncludeNewAccounts'];
        }

        if (isset($map['Executions'])) {
            if (!empty($map['Executions'])) {
                $model->executions = [];
                $n1 = 0;
                foreach ($map['Executions'] as $item1) {
                    $model->executions[$n1] = executions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }

        if (isset($map['SelectedAccountIds'])) {
            if (!empty($map['SelectedAccountIds'])) {
                $model->selectedAccountIds = [];
                $n1 = 0;
                foreach ($map['SelectedAccountIds'] as $item1) {
                    $model->selectedAccountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
