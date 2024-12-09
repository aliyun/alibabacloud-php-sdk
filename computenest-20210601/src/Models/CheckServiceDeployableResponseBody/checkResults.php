<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CheckServiceDeployableResponseBody;

use AlibabaCloud\Tea\Model;

class checkResults extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $message;

    /**
     * @example Balance
     *
     * @var string
     */
    public $type;

    /**
     * @example true
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'message' => 'Message',
        'type'    => 'Type',
        'value'   => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
