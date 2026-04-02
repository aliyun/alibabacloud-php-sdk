<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListTempFilesResponseBody;

use AlibabaCloud\Dara\Model;

class quota extends Model
{
    /**
     * @var int
     */
    public $totalCapacity;

    /**
     * @var int
     */
    public $totalFileNum;

    /**
     * @var int
     */
    public $usedCapacity;

    /**
     * @var int
     */
    public $usedFileNum;
    protected $_name = [
        'totalCapacity' => 'TotalCapacity',
        'totalFileNum' => 'TotalFileNum',
        'usedCapacity' => 'UsedCapacity',
        'usedFileNum' => 'UsedFileNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }

        if (null !== $this->totalFileNum) {
            $res['TotalFileNum'] = $this->totalFileNum;
        }

        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
        }

        if (null !== $this->usedFileNum) {
            $res['UsedFileNum'] = $this->usedFileNum;
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
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }

        if (isset($map['TotalFileNum'])) {
            $model->totalFileNum = $map['TotalFileNum'];
        }

        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        if (isset($map['UsedFileNum'])) {
            $model->usedFileNum = $map['UsedFileNum'];
        }

        return $model;
    }
}
