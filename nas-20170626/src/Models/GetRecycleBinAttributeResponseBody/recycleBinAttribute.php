<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class recycleBinAttribute extends Model
{
    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $reservedDays;

    /**
     * @var string
     */
    public $enableTime;
    protected $_name = [
        'size'         => 'Size',
        'status'       => 'Status',
        'reservedDays' => 'ReservedDays',
        'enableTime'   => 'EnableTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reservedDays) {
            $res['ReservedDays'] = $this->reservedDays;
        }
        if (null !== $this->enableTime) {
            $res['EnableTime'] = $this->enableTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recycleBinAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ReservedDays'])) {
            $model->reservedDays = $map['ReservedDays'];
        }
        if (isset($map['EnableTime'])) {
            $model->enableTime = $map['EnableTime'];
        }

        return $model;
    }
}
