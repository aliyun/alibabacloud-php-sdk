<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListUserConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $categoryNames;

    /**
     * @var string
     */
    public $configKeys;
    protected $_name = [
        'categoryNames' => 'CategoryNames',
        'configKeys' => 'ConfigKeys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryNames) {
            $res['CategoryNames'] = $this->categoryNames;
        }

        if (null !== $this->configKeys) {
            $res['ConfigKeys'] = $this->configKeys;
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
        if (isset($map['CategoryNames'])) {
            $model->categoryNames = $map['CategoryNames'];
        }

        if (isset($map['ConfigKeys'])) {
            $model->configKeys = $map['ConfigKeys'];
        }

        return $model;
    }
}
