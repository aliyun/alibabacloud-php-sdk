<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result\testSettingDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result\testSettingDTO\checkConfig\checkItems;

class checkConfig extends Model
{
    /**
     * @var checkItems[]
     */
    public $checkItems;
    protected $_name = [
        'checkItems' => 'checkItems',
    ];

    public function validate()
    {
        if (\is_array($this->checkItems)) {
            Model::validateArray($this->checkItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkItems) {
            if (\is_array($this->checkItems)) {
                $res['checkItems'] = [];
                $n1                = 0;
                foreach ($this->checkItems as $item1) {
                    $res['checkItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['checkItems'])) {
            if (!empty($map['checkItems'])) {
                $model->checkItems = [];
                $n1                = 0;
                foreach ($map['checkItems'] as $item1) {
                    $model->checkItems[$n1++] = checkItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
