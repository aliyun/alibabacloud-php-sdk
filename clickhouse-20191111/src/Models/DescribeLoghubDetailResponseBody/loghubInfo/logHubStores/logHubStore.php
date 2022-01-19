<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLoghubDetailResponseBody\loghubInfo\logHubStores;

use AlibabaCloud\Tea\Model;

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

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'fieldKey' => 'FieldKey',
        'logKey'   => 'LogKey',
        'type'     => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
