<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryCallStatusResponseBody;

use AlibabaCloud\Tea\Model;

class secretCallStatusDTO extends Model
{
    /**
     * @var string
     */
    public $calledNo;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'calledNo'  => 'CalledNo',
        'extension' => 'Extension',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNo) {
            $res['CalledNo'] = $this->calledNo;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CalledNo'])) {
            $model->calledNo = $map['CalledNo'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
