<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody;

use AlibabaCloud\Tea\Model;

class ncVerifyDatas extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $ncVerifyPass;

    /**
     * @var int
     */
    public $ncVerifyBlock;
    protected $_name = [
        'time'          => 'Time',
        'ncVerifyPass'  => 'NcVerifyPass',
        'ncVerifyBlock' => 'NcVerifyBlock',
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
        if (null !== $this->ncVerifyPass) {
            $res['NcVerifyPass'] = $this->ncVerifyPass;
        }
        if (null !== $this->ncVerifyBlock) {
            $res['NcVerifyBlock'] = $this->ncVerifyBlock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ncVerifyDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['NcVerifyPass'])) {
            $model->ncVerifyPass = $map['NcVerifyPass'];
        }
        if (isset($map['NcVerifyBlock'])) {
            $model->ncVerifyBlock = $map['NcVerifyBlock'];
        }

        return $model;
    }
}
