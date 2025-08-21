<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponseBody;

use AlibabaCloud\Dara\Model;

class developmentCertInfo extends Model
{
    /**
     * @var int
     */
    public $exipreTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'exipreTime' => 'ExipreTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exipreTime) {
            $res['ExipreTime'] = $this->exipreTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ExipreTime'])) {
            $model->exipreTime = $map['ExipreTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
