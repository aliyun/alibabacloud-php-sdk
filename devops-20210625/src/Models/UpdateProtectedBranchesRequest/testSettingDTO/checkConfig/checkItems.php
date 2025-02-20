<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesRequest\testSettingDTO\checkConfig;

use AlibabaCloud\Dara\Model;

class checkItems extends Model
{
    /**
     * @var bool
     */
    public $isRequired;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'isRequired' => 'isRequired',
        'name'       => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isRequired) {
            $res['isRequired'] = $this->isRequired;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['isRequired'])) {
            $model->isRequired = $map['isRequired'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
