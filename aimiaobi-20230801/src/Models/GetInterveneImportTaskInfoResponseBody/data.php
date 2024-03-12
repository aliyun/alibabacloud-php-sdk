<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneImportTaskInfoResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneImportTaskInfoResponseBody\data\status;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var status
     */
    public $status;
    protected $_name = [
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}
