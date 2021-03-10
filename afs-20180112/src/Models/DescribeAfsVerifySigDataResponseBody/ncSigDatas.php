<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody;

use AlibabaCloud\Tea\Model;

class ncSigDatas extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $ncSigBlock;

    /**
     * @var int
     */
    public $ncSigPass;
    protected $_name = [
        'time'       => 'Time',
        'ncSigBlock' => 'NcSigBlock',
        'ncSigPass'  => 'NcSigPass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->ncSigBlock) {
            $res['NcSigBlock'] = $this->ncSigBlock;
        }
        if (null !== $this->ncSigPass) {
            $res['NcSigPass'] = $this->ncSigPass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ncSigDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['NcSigBlock'])) {
            $model->ncSigBlock = $map['NcSigBlock'];
        }
        if (isset($map['NcSigPass'])) {
            $model->ncSigPass = $map['NcSigPass'];
        }

        return $model;
    }
}
