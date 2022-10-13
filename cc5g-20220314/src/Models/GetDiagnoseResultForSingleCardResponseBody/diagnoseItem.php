<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\GetDiagnoseResultForSingleCardResponseBody;

use AlibabaCloud\Tea\Model;

class diagnoseItem extends Model
{
    /**
     * @var string
     */
    public $part;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'part'   => 'Part',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->part) {
            $res['Part'] = $this->part;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Part'])) {
            $model->part = $map['Part'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
