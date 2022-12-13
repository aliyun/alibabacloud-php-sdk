<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListByMonitorSourceIdRequest extends Model
{
    /**
     * @var string
     */
    public $monitorSourceId;
    protected $_name = [
        'monitorSourceId' => 'monitorSourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListByMonitorSourceIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }

        return $model;
    }
}
