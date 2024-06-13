<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The name of the filter parameter.
     *
     * >  For more information about the supported filter parameters and their valid values, see the following **supplement about the Key parameter**.
     * @example keyWords
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the filter parameter.
     *
     * @example select
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

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
     * @return filters
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
