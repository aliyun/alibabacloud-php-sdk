<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsOneConfDataResponseBody;

use AlibabaCloud\Tea\Model;

class ncOneConfDatas extends Model
{
    /**
     * @var string
     */
    public $tableDate;

    /**
     * @var int
     */
    public $ncSigCnt;

    /**
     * @var int
     */
    public $ncVerifyCnt;

    /**
     * @var int
     */
    public $ncNoActionCnt;

    /**
     * @var int
     */
    public $ncVerifyBlockCnt;

    /**
     * @var int
     */
    public $ncInitCnt;

    /**
     * @var int
     */
    public $ncSigBlockCnt;
    protected $_name = [
        'tableDate'        => 'TableDate',
        'ncSigCnt'         => 'NcSigCnt',
        'ncVerifyCnt'      => 'NcVerifyCnt',
        'ncNoActionCnt'    => 'NcNoActionCnt',
        'ncVerifyBlockCnt' => 'NcVerifyBlockCnt',
        'ncInitCnt'        => 'NcInitCnt',
        'ncSigBlockCnt'    => 'NcSigBlockCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableDate) {
            $res['TableDate'] = $this->tableDate;
        }
        if (null !== $this->ncSigCnt) {
            $res['NcSigCnt'] = $this->ncSigCnt;
        }
        if (null !== $this->ncVerifyCnt) {
            $res['NcVerifyCnt'] = $this->ncVerifyCnt;
        }
        if (null !== $this->ncNoActionCnt) {
            $res['NcNoActionCnt'] = $this->ncNoActionCnt;
        }
        if (null !== $this->ncVerifyBlockCnt) {
            $res['NcVerifyBlockCnt'] = $this->ncVerifyBlockCnt;
        }
        if (null !== $this->ncInitCnt) {
            $res['NcInitCnt'] = $this->ncInitCnt;
        }
        if (null !== $this->ncSigBlockCnt) {
            $res['NcSigBlockCnt'] = $this->ncSigBlockCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ncOneConfDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableDate'])) {
            $model->tableDate = $map['TableDate'];
        }
        if (isset($map['NcSigCnt'])) {
            $model->ncSigCnt = $map['NcSigCnt'];
        }
        if (isset($map['NcVerifyCnt'])) {
            $model->ncVerifyCnt = $map['NcVerifyCnt'];
        }
        if (isset($map['NcNoActionCnt'])) {
            $model->ncNoActionCnt = $map['NcNoActionCnt'];
        }
        if (isset($map['NcVerifyBlockCnt'])) {
            $model->ncVerifyBlockCnt = $map['NcVerifyBlockCnt'];
        }
        if (isset($map['NcInitCnt'])) {
            $model->ncInitCnt = $map['NcInitCnt'];
        }
        if (isset($map['NcSigBlockCnt'])) {
            $model->ncSigBlockCnt = $map['NcSigBlockCnt'];
        }

        return $model;
    }
}
