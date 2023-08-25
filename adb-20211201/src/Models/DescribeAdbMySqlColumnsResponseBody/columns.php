<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlColumnsResponseBody;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @description The comments of the column.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The name of the column.
     *
     * @example id
     *
     * @var string
     */
    public $name;

    /**
     * @description The data type of the column.
     *
     * @example bigint
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'Comment',
        'name'    => 'Name',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
