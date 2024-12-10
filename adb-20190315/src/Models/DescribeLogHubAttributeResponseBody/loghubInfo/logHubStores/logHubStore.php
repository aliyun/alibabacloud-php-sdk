<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogHubAttributeResponseBody\loghubInfo\logHubStores;

use AlibabaCloud\Tea\Model;

class logHubStore extends Model
{
    /**
     * @example 255311
     *
     * @var string
     */
    public $fieldKey;

    /**
     * @example taskid
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
     * @return logHubStore
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
