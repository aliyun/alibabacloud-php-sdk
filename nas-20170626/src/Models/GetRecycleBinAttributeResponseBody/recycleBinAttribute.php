<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class recycleBinAttribute extends Model
{
    /**
     * @description The time at which the recycle bin was enabled.
     *
     * @example 2021-05-30T10:08:08Z
     *
     * @var string
     */
    public $enableTime;

    /**
     * @description The retention period of the files in the recycle bin. Unit: days.
     *
     * If the recycle bin is disabled, 0 is returned for this parameter.
     * @example 0
     *
     * @var int
     */
    public $reservedDays;

    /**
     * @description The size of the cold data that is dumped to the recycle bin. Unit: bytes.
     *
     * @example 100
     *
     * @var int
     */
    public $secondarySize;

    /**
     * @description The size of the files that are dumped to the recycle bin. Unit: bytes.
     *
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the recycle bin.
     *
     * Valid values:
     *
     *   Enable: The recycle bin is enabled.
     *   Disable: The recycle bin is disabled.
     *
     * @example Disable
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'enableTime'    => 'EnableTime',
        'reservedDays'  => 'ReservedDays',
        'secondarySize' => 'SecondarySize',
        'size'          => 'Size',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableTime) {
            $res['EnableTime'] = $this->enableTime;
        }
        if (null !== $this->reservedDays) {
            $res['ReservedDays'] = $this->reservedDays;
        }
        if (null !== $this->secondarySize) {
            $res['SecondarySize'] = $this->secondarySize;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EnableTime'])) {
            $model->enableTime = $map['EnableTime'];
        }
        if (isset($map['ReservedDays'])) {
            $model->reservedDays = $map['ReservedDays'];
        }
        if (isset($map['SecondarySize'])) {
            $model->secondarySize = $map['SecondarySize'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
