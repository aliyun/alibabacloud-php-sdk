<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class RemoveOrganizationMemberRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var string
     */
    public $locale;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'locale' => 'Locale',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
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
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }

        return $model;
    }
}
