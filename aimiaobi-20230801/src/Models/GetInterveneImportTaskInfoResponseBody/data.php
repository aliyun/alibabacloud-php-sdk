<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneImportTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneImportTaskInfoResponseBody\data\status;

class data extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var status
     */
    public $status;
    protected $_name = [
        'code' => 'Code',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}
