<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsOneConfDataResponseBody;

use AlibabaCloud\Tea\Model;

class icOneConfDatas extends Model
{
    /**
     * @var int
     */
    public $icSigCnt;

    /**
     * @var int
     */
    public $icBlockCnt;

    /**
     * @var string
     */
    public $tableDate;

    /**
     * @var int
     */
    public $icVerifyCnt;

    /**
     * @var int
     */
    public $icSecVerifyCnt;

    /**
     * @var int
     */
    public $icInitCnt;

    /**
     * @var int
     */
    public $icNoActionCnt;
    protected $_name = [
        'icSigCnt'       => 'IcSigCnt',
        'icBlockCnt'     => 'IcBlockCnt',
        'tableDate'      => 'TableDate',
        'icVerifyCnt'    => 'IcVerifyCnt',
        'icSecVerifyCnt' => 'IcSecVerifyCnt',
        'icInitCnt'      => 'IcInitCnt',
        'icNoActionCnt'  => 'IcNoActionCnt',
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
        if (null !== $this->icBlockCnt) {
            $res['IcBlockCnt'] = $this->icBlockCnt;
        }
        if (null !== $this->tableDate) {
            $res['TableDate'] = $this->tableDate;
        }
        if (null !== $this->icVerifyCnt) {
            $res['IcVerifyCnt'] = $this->icVerifyCnt;
        }
        if (null !== $this->icSecVerifyCnt) {
            $res['IcSecVerifyCnt'] = $this->icSecVerifyCnt;
        }
        if (null !== $this->icInitCnt) {
            $res['IcInitCnt'] = $this->icInitCnt;
        }
        if (null !== $this->icNoActionCnt) {
            $res['IcNoActionCnt'] = $this->icNoActionCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return icOneConfDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IcSigCnt'])) {
            $model->icSigCnt = $map['IcSigCnt'];
        }
        if (isset($map['IcBlockCnt'])) {
            $model->icBlockCnt = $map['IcBlockCnt'];
        }
        if (isset($map['TableDate'])) {
            $model->tableDate = $map['TableDate'];
        }
        if (isset($map['IcVerifyCnt'])) {
            $model->icVerifyCnt = $map['IcVerifyCnt'];
        }
        if (isset($map['IcSecVerifyCnt'])) {
            $model->icSecVerifyCnt = $map['IcSecVerifyCnt'];
        }
        if (isset($map['IcInitCnt'])) {
            $model->icInitCnt = $map['IcInitCnt'];
        }
        if (isset($map['IcNoActionCnt'])) {
            $model->icNoActionCnt = $map['IcNoActionCnt'];
        }

        return $model;
    }
}
