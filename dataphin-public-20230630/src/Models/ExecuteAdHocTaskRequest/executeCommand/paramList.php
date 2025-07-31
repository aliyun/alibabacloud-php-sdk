<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteAdHocTaskRequest\executeCommand;

use AlibabaCloud\Tea\Model;

class paramList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example param1
     *
     * @var string
     */
    public $key;

    /**
     * @description This parameter is required.
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
