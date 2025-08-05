<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery\tableSchema;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @example auto_increment
     *
     * @var string
     */
    public $extra;

    /**
     * @example id
     *
     * @var string
     */
    public $field;

    /**
     * @example NO
     *
     * @var string
     */
    public $isNull;

    /**
     * @example PRI
     *
     * @var string
     */
    public $key;

    /**
     * @example int
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return columns
     */
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
