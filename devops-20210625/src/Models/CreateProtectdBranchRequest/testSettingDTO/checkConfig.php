<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchRequest\testSettingDTO;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchRequest\testSettingDTO\checkConfig\checkItems;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItems) {
            $res['checkItems'] = [];
            if (null !== $this->checkItems && \is_array($this->checkItems)) {
                $n = 0;
                foreach ($this->checkItems as $item) {
                    $res['checkItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkItems'])) {
            if (!empty($map['checkItems'])) {
                $model->checkItems = [];
                $n                 = 0;
                foreach ($map['checkItems'] as $item) {
                    $model->checkItems[$n++] = null !== $item ? checkItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
