<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks\desiredConfiguration\containers;

use AlibabaCloud\Dara\Model;

class environmentVars extends Model
{
    /**
     * @var string
     */
    public $fieldRefFieldPath;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'fieldRefFieldPath' => 'FieldRefFieldPath',
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldRefFieldPath) {
            $res['FieldRefFieldPath'] = $this->fieldRefFieldPath;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['FieldRefFieldPath'])) {
            $model->fieldRefFieldPath = $map['FieldRefFieldPath'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
