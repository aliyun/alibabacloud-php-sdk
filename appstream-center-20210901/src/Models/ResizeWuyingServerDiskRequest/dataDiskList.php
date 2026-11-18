<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ResizeWuyingServerDiskRequest;

use AlibabaCloud\Dara\Model;

class dataDiskList extends Model
{
    /**
     * @var string
     */
    public $diskNo;

    /**
     * @var string
     */
    public $diskSubType;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var int
     */
    public $newSize;
    protected $_name = [
        'diskNo' => 'DiskNo',
        'diskSubType' => 'DiskSubType',
        'diskType' => 'DiskType',
        'newSize' => 'NewSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskNo) {
            $res['DiskNo'] = $this->diskNo;
        }

        if (null !== $this->diskSubType) {
            $res['DiskSubType'] = $this->diskSubType;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->newSize) {
            $res['NewSize'] = $this->newSize;
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
        if (isset($map['DiskNo'])) {
            $model->diskNo = $map['DiskNo'];
        }

        if (isset($map['DiskSubType'])) {
            $model->diskSubType = $map['DiskSubType'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['NewSize'])) {
            $model->newSize = $map['NewSize'];
        }

        return $model;
    }
}
