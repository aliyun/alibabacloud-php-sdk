<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\OperateLogHubRequest;

use AlibabaCloud\Tea\Model;

class logHubStores extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example testValue
     *
     * @var string
     */
    public $fieldKey;

    /**
     * @description This parameter is required.
     *
     * @example testKey
     *
     * @var string
     */
    public $logKey;
    protected $_name = [
        'fieldKey' => 'FieldKey',
        'logKey'   => 'LogKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldKey) {
            $res['FieldKey'] = $this->fieldKey;
        }
        if (null !== $this->logKey) {
            $res['LogKey'] = $this->logKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logHubStores
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldKey'])) {
            $model->fieldKey = $map['FieldKey'];
        }
        if (isset($map['LogKey'])) {
            $model->logKey = $map['LogKey'];
        }

        return $model;
    }
}
