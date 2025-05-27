<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsWithEventResponseBody\data\responseData;

use AlibabaCloud\Dara\Model;

class alertInfoList extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $values;
    protected $_name = [
        'key' => 'Key',
        'keyName' => 'KeyName',
        'values' => 'Values',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->values) {
            $res['Values'] = $this->values;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
