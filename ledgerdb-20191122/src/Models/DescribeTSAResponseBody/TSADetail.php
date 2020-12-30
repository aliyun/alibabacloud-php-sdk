<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeTSAResponseBody;

use AlibabaCloud\Tea\Model;

class TSADetail extends Model
{
    /**
     * @var int
     */
    public $TS;

    /**
     * @var string
     */
    public $SN;

    /**
     * @var string
     */
    public $rootHash;

    /**
     * @var int
     */
    public $blockNumber;

    /**
     * @var string
     */
    public $CTSR;
    protected $_name = [
        'TS'          => 'TS',
        'SN'          => 'SN',
        'rootHash'    => 'RootHash',
        'blockNumber' => 'BlockNumber',
        'CTSR'        => 'CTSR',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->TS) {
            $res['TS'] = $this->TS;
        }
        if (null !== $this->SN) {
            $res['SN'] = $this->SN;
        }
        if (null !== $this->rootHash) {
            $res['RootHash'] = $this->rootHash;
        }
        if (null !== $this->blockNumber) {
            $res['BlockNumber'] = $this->blockNumber;
        }
        if (null !== $this->CTSR) {
            $res['CTSR'] = $this->CTSR;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TSADetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TS'])) {
            $model->TS = $map['TS'];
        }
        if (isset($map['SN'])) {
            $model->SN = $map['SN'];
        }
        if (isset($map['RootHash'])) {
            $model->rootHash = $map['RootHash'];
        }
        if (isset($map['BlockNumber'])) {
            $model->blockNumber = $map['BlockNumber'];
        }
        if (isset($map['CTSR'])) {
            $model->CTSR = $map['CTSR'];
        }

        return $model;
    }
}
