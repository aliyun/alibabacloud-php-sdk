<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryTmpEffectReportDayDataResponseBody\model;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $clickPv;

    /**
     * @var string
     */
    public $clickUv;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $exposePv;

    /**
     * @var string
     */
    public $exposeUv;

    /**
     * @var string
     */
    public $rptSuccessCount;

    /**
     * @var string
     */
    public $tmpCode;

    /**
     * @var string
     */
    public $tmpName;

    /**
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'clickPv' => 'ClickPv',
        'clickUv' => 'ClickUv',
        'date' => 'Date',
        'exposePv' => 'ExposePv',
        'exposeUv' => 'ExposeUv',
        'rptSuccessCount' => 'RptSuccessCount',
        'tmpCode' => 'TmpCode',
        'tmpName' => 'TmpName',
        'vendorName' => 'VendorName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clickPv) {
            $res['ClickPv'] = $this->clickPv;
        }

        if (null !== $this->clickUv) {
            $res['ClickUv'] = $this->clickUv;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->exposePv) {
            $res['ExposePv'] = $this->exposePv;
        }

        if (null !== $this->exposeUv) {
            $res['ExposeUv'] = $this->exposeUv;
        }

        if (null !== $this->rptSuccessCount) {
            $res['RptSuccessCount'] = $this->rptSuccessCount;
        }

        if (null !== $this->tmpCode) {
            $res['TmpCode'] = $this->tmpCode;
        }

        if (null !== $this->tmpName) {
            $res['TmpName'] = $this->tmpName;
        }

        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
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
        if (isset($map['ClickPv'])) {
            $model->clickPv = $map['ClickPv'];
        }

        if (isset($map['ClickUv'])) {
            $model->clickUv = $map['ClickUv'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['ExposePv'])) {
            $model->exposePv = $map['ExposePv'];
        }

        if (isset($map['ExposeUv'])) {
            $model->exposeUv = $map['ExposeUv'];
        }

        if (isset($map['RptSuccessCount'])) {
            $model->rptSuccessCount = $map['RptSuccessCount'];
        }

        if (isset($map['TmpCode'])) {
            $model->tmpCode = $map['TmpCode'];
        }

        if (isset($map['TmpName'])) {
            $model->tmpName = $map['TmpName'];
        }

        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        return $model;
    }
}
