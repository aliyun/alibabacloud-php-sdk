<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class recycleBinAttribute extends Model
{
    /**
     * @var int
     */
    public $archiveSize;

    /**
     * @var string
     */
    public $enableTime;

    /**
     * @var int
     */
    public $reservedDays;

    /**
     * @var int
     */
    public $secondarySize;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'archiveSize' => 'ArchiveSize',
        'enableTime' => 'EnableTime',
        'reservedDays' => 'ReservedDays',
        'secondarySize' => 'SecondarySize',
        'size' => 'Size',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveSize) {
            $res['ArchiveSize'] = $this->archiveSize;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveSize'])) {
            $model->archiveSize = $map['ArchiveSize'];
        }

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
