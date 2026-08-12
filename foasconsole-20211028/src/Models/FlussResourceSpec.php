<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;

class FlussResourceSpec extends Model
{
    /**
     * @var int
     */
    public $diskSizeInGB;

    /**
     * @var string
     */
    public $slaveModel;

    /**
     * @var int
     */
    public $slaveNum;

    /**
     * @var int
     */
    public $tieringPostCu;

    /**
     * @var int
     */
    public $tieringPreCu;
    protected $_name = [
        'diskSizeInGB' => 'DiskSizeInGB',
        'slaveModel' => 'SlaveModel',
        'slaveNum' => 'SlaveNum',
        'tieringPostCu' => 'TieringPostCu',
        'tieringPreCu' => 'TieringPreCu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskSizeInGB) {
            $res['DiskSizeInGB'] = $this->diskSizeInGB;
        }

        if (null !== $this->slaveModel) {
            $res['SlaveModel'] = $this->slaveModel;
        }

        if (null !== $this->slaveNum) {
            $res['SlaveNum'] = $this->slaveNum;
        }

        if (null !== $this->tieringPostCu) {
            $res['TieringPostCu'] = $this->tieringPostCu;
        }

        if (null !== $this->tieringPreCu) {
            $res['TieringPreCu'] = $this->tieringPreCu;
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
        if (isset($map['DiskSizeInGB'])) {
            $model->diskSizeInGB = $map['DiskSizeInGB'];
        }

        if (isset($map['SlaveModel'])) {
            $model->slaveModel = $map['SlaveModel'];
        }

        if (isset($map['SlaveNum'])) {
            $model->slaveNum = $map['SlaveNum'];
        }

        if (isset($map['TieringPostCu'])) {
            $model->tieringPostCu = $map['TieringPostCu'];
        }

        if (isset($map['TieringPreCu'])) {
            $model->tieringPreCu = $map['TieringPreCu'];
        }

        return $model;
    }
}
