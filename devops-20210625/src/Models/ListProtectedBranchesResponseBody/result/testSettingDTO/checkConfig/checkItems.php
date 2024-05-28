<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\testSettingDTO\checkConfig;

use AlibabaCloud\Tea\Model;

class checkItems extends Model
{
    /**
     * @example false
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return checkItems
     */
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
