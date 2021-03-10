<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsOneConfDataResponseBody;

use AlibabaCloud\Tea\Model;

class nvcOneConfDatas extends Model
{
    /**
     * @var int
     */
    public $nvcNoActionCnt;

    /**
     * @var int
     */
    public $nvcSecVerifyCnt;

    /**
     * @var string
     */
    public $tableDate;

    /**
     * @var int
     */
    public $nvcVerifyCnt;

    /**
     * @var int
     */
    public $nvcBlockCnt;

    /**
     * @var int
     */
    public $nvcInitCnt;
    protected $_name = [
        'nvcNoActionCnt'  => 'NvcNoActionCnt',
        'nvcSecVerifyCnt' => 'NvcSecVerifyCnt',
        'tableDate'       => 'TableDate',
        'nvcVerifyCnt'    => 'NvcVerifyCnt',
        'nvcBlockCnt'     => 'NvcBlockCnt',
        'nvcInitCnt'      => 'NvcInitCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nvcNoActionCnt) {
            $res['NvcNoActionCnt'] = $this->nvcNoActionCnt;
        }
        if (null !== $this->nvcSecVerifyCnt) {
            $res['NvcSecVerifyCnt'] = $this->nvcSecVerifyCnt;
        }
        if (null !== $this->tableDate) {
            $res['TableDate'] = $this->tableDate;
        }
        if (null !== $this->nvcVerifyCnt) {
            $res['NvcVerifyCnt'] = $this->nvcVerifyCnt;
        }
        if (null !== $this->nvcBlockCnt) {
            $res['NvcBlockCnt'] = $this->nvcBlockCnt;
        }
        if (null !== $this->nvcInitCnt) {
            $res['NvcInitCnt'] = $this->nvcInitCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nvcOneConfDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NvcNoActionCnt'])) {
            $model->nvcNoActionCnt = $map['NvcNoActionCnt'];
        }
        if (isset($map['NvcSecVerifyCnt'])) {
            $model->nvcSecVerifyCnt = $map['NvcSecVerifyCnt'];
        }
        if (isset($map['TableDate'])) {
            $model->tableDate = $map['TableDate'];
        }
        if (isset($map['NvcVerifyCnt'])) {
            $model->nvcVerifyCnt = $map['NvcVerifyCnt'];
        }
        if (isset($map['NvcBlockCnt'])) {
            $model->nvcBlockCnt = $map['NvcBlockCnt'];
        }
        if (isset($map['NvcInitCnt'])) {
            $model->nvcInitCnt = $map['NvcInitCnt'];
        }

        return $model;
    }
}
