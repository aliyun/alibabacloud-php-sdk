<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody;

use AlibabaCloud\Tea\Model;

class icVerifyDatas extends Model
{
    /**
     * @var int
     */
    public $icSigCnt;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $icBlockCnt;

    /**
     * @var int
     */
    public $icSecVerifyCnt;

    /**
     * @var int
     */
    public $icVerifyCnt;
    protected $_name = [
        'icSigCnt'       => 'IcSigCnt',
        'time'           => 'Time',
        'icBlockCnt'     => 'IcBlockCnt',
        'icSecVerifyCnt' => 'IcSecVerifyCnt',
        'icVerifyCnt'    => 'IcVerifyCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icSigCnt) {
            $res['IcSigCnt'] = $this->icSigCnt;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->icBlockCnt) {
            $res['IcBlockCnt'] = $this->icBlockCnt;
        }
        if (null !== $this->icSecVerifyCnt) {
            $res['IcSecVerifyCnt'] = $this->icSecVerifyCnt;
        }
        if (null !== $this->icVerifyCnt) {
            $res['IcVerifyCnt'] = $this->icVerifyCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return icVerifyDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IcSigCnt'])) {
            $model->icSigCnt = $map['IcSigCnt'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['IcBlockCnt'])) {
            $model->icBlockCnt = $map['IcBlockCnt'];
        }
        if (isset($map['IcSecVerifyCnt'])) {
            $model->icSecVerifyCnt = $map['IcSecVerifyCnt'];
        }
        if (isset($map['IcVerifyCnt'])) {
            $model->icVerifyCnt = $map['IcVerifyCnt'];
        }

        return $model;
    }
}
