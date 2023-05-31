<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckCustomConfigResponseBody;

use AlibabaCloud\Tea\Model;

class illegalCustomConfigs extends Model
{
    /**
     * @description The name of the custom configuration item. The name of a custom configuration item is unique in a check item.
     *
     * @example SessionTimeMax
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return illegalCustomConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
