<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Igraph\V20210621\Models;

use AlibabaCloud\Tea\Model;

class GetTableLastBackflowRequest extends Model
{
    /**
     * @var string
     */
    public $partition;
    protected $_name = [
        'partition' => 'partition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTableLastBackflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        return $model;
    }
}
