<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class PartitionError extends Model
{
    /**
     * @var string
     */
    public $errorDetail;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'errorDetail' => 'ErrorDetail',
        'values'      => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = $this->errorDetail;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PartitionError
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = $map['ErrorDetail'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
