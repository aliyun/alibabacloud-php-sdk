<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyV2Request\rules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyV2Request\rules\dataSourceFilters\accounts;

class dataSourceFilters extends Model
{
    /**
     * @var string
     */
    public $accountScope;

    /**
     * @var accounts[]
     */
    public $accounts;

    /**
     * @var string[]
     */
    public $dataSourceIds;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'accountScope' => 'AccountScope',
        'accounts' => 'Accounts',
        'dataSourceIds' => 'DataSourceIds',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->accounts)) {
            Model::validateArray($this->accounts);
        }
        if (\is_array($this->dataSourceIds)) {
            Model::validateArray($this->dataSourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountScope) {
            $res['AccountScope'] = $this->accountScope;
        }

        if (null !== $this->accounts) {
            if (\is_array($this->accounts)) {
                $res['Accounts'] = [];
                $n1 = 0;
                foreach ($this->accounts as $item1) {
                    $res['Accounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceIds) {
            if (\is_array($this->dataSourceIds)) {
                $res['DataSourceIds'] = [];
                $n1 = 0;
                foreach ($this->dataSourceIds as $item1) {
                    $res['DataSourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['AccountScope'])) {
            $model->accountScope = $map['AccountScope'];
        }

        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = [];
                $n1 = 0;
                foreach ($map['Accounts'] as $item1) {
                    $model->accounts[$n1] = accounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceIds'])) {
            if (!empty($map['DataSourceIds'])) {
                $model->dataSourceIds = [];
                $n1 = 0;
                foreach ($map['DataSourceIds'] as $item1) {
                    $model->dataSourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
