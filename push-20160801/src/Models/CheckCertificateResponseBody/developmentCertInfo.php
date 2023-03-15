<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponseBody;

use AlibabaCloud\Tea\Model;

class developmentCertInfo extends Model
{
    /**
     * @example 1470024000000
     *
     * @var int
     */
    public $exipreTime;

    /**
     * @example EXPIRED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'exipreTime' => 'ExipreTime',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return developmentCertInfo
     */
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
