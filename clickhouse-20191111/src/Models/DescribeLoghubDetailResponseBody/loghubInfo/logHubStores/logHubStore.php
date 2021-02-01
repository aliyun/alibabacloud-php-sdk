<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLoghubDetailResponseBody\loghubInfo\logHubStores;

use AlibabaCloud\Tea\Model;

class logHubStore extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $logKey;

    /**
     * @var string
     */
    public $fieldKey;
    protected $_name = [
        'type'     => 'Type',
        'logKey'   => 'LogKey',
        'fieldKey' => 'FieldKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->logKey) {
            $res['LogKey'] = $this->logKey;
        }
        if (null !== $this->fieldKey) {
            $res['FieldKey'] = $this->fieldKey;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['LogKey'])) {
            $model->logKey = $map['LogKey'];
        }
        if (isset($map['FieldKey'])) {
            $model->fieldKey = $map['FieldKey'];
        }

        return $model;
    }
}
