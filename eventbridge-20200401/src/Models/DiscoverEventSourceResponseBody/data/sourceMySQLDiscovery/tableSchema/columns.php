<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery\tableSchema;

use AlibabaCloud\Dara\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $isNull;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'extra' => 'Extra',
        'field' => 'Field',
        'isNull' => 'IsNull',
        'key' => 'Key',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->isNull) {
            $res['IsNull'] = $this->isNull;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['IsNull'])) {
            $model->isNull = $map['IsNull'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
