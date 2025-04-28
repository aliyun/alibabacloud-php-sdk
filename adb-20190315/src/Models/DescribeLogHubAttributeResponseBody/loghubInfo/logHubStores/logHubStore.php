<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogHubAttributeResponseBody\loghubInfo\logHubStores;

use AlibabaCloud\Dara\Model;

class logHubStore extends Model
{
    /**
     * @var string
     */
    public $fieldKey;

    /**
     * @var string
     */
    public $logKey;
    protected $_name = [
        'fieldKey' => 'FieldKey',
        'logKey' => 'LogKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
