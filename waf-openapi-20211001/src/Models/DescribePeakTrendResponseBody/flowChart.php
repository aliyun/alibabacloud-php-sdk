<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePeakTrendResponseBody;

use AlibabaCloud\Tea\Model;

class flowChart extends Model
{
    /**
     * @var int
     */
    public $aclSum;

    /**
     * @var int
     */
    public $antiScanSum;

    /**
     * @var int
     */
    public $ccSum;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $wafSum;
    protected $_name = [
        'aclSum'      => 'AclSum',
        'antiScanSum' => 'AntiScanSum',
        'ccSum'       => 'CcSum',
        'count'       => 'Count',
        'index'       => 'Index',
        'wafSum'      => 'WafSum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclSum) {
            $res['AclSum'] = $this->aclSum;
        }
        if (null !== $this->antiScanSum) {
            $res['AntiScanSum'] = $this->antiScanSum;
        }
        if (null !== $this->ccSum) {
            $res['CcSum'] = $this->ccSum;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->wafSum) {
            $res['WafSum'] = $this->wafSum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowChart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclSum'])) {
            $model->aclSum = $map['AclSum'];
        }
        if (isset($map['AntiScanSum'])) {
            $model->antiScanSum = $map['AntiScanSum'];
        }
        if (isset($map['CcSum'])) {
            $model->ccSum = $map['CcSum'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['WafSum'])) {
            $model->wafSum = $map['WafSum'];
        }

        return $model;
    }
}
