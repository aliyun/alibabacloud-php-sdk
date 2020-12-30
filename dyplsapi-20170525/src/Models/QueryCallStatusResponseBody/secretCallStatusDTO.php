<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryCallStatusResponseBody;

use AlibabaCloud\Tea\Model;

class secretCallStatusDTO extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $calledNo;
    protected $_name = [
        'status'   => 'Status',
        'calledNo' => 'CalledNo',
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
        if (null !== $this->calledNo) {
            $res['CalledNo'] = $this->calledNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretCallStatusDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CalledNo'])) {
            $model->calledNo = $map['CalledNo'];
        }

        return $model;
    }
}
