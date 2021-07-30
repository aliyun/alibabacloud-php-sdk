<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponseBody;

use AlibabaCloud\Tea\Model;

class developmentCertInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $exipreTime;
    protected $_name = [
        'status'     => 'Status',
        'exipreTime' => 'ExipreTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->exipreTime) {
            $res['ExipreTime'] = $this->exipreTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return developmentCertInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExipreTime'])) {
            $model->exipreTime = $map['ExipreTime'];
        }

        return $model;
    }
}
