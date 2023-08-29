<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushAnalysisCoreIndexResponseBody\resultContent;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $arrivalNum;

    /**
     * @var float
     */
    public $arrivalRate;

    /**
     * @var float
     */
    public $ignoreNum;

    /**
     * @var float
     */
    public $ignoreRate;

    /**
     * @var float
     */
    public $openNum;

    /**
     * @var float
     */
    public $openRate;

    /**
     * @var float
     */
    public $pushNum;

    /**
     * @var float
     */
    public $pushTotalNum;
    protected $_name = [
        'arrivalNum'   => 'ArrivalNum',
        'arrivalRate'  => 'ArrivalRate',
        'ignoreNum'    => 'IgnoreNum',
        'ignoreRate'   => 'IgnoreRate',
        'openNum'      => 'OpenNum',
        'openRate'     => 'OpenRate',
        'pushNum'      => 'PushNum',
        'pushTotalNum' => 'PushTotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrivalNum) {
            $res['ArrivalNum'] = $this->arrivalNum;
        }
        if (null !== $this->arrivalRate) {
            $res['ArrivalRate'] = $this->arrivalRate;
        }
        if (null !== $this->ignoreNum) {
            $res['IgnoreNum'] = $this->ignoreNum;
        }
        if (null !== $this->ignoreRate) {
            $res['IgnoreRate'] = $this->ignoreRate;
        }
        if (null !== $this->openNum) {
            $res['OpenNum'] = $this->openNum;
        }
        if (null !== $this->openRate) {
            $res['OpenRate'] = $this->openRate;
        }
        if (null !== $this->pushNum) {
            $res['PushNum'] = $this->pushNum;
        }
        if (null !== $this->pushTotalNum) {
            $res['PushTotalNum'] = $this->pushTotalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrivalNum'])) {
            $model->arrivalNum = $map['ArrivalNum'];
        }
        if (isset($map['ArrivalRate'])) {
            $model->arrivalRate = $map['ArrivalRate'];
        }
        if (isset($map['IgnoreNum'])) {
            $model->ignoreNum = $map['IgnoreNum'];
        }
        if (isset($map['IgnoreRate'])) {
            $model->ignoreRate = $map['IgnoreRate'];
        }
        if (isset($map['OpenNum'])) {
            $model->openNum = $map['OpenNum'];
        }
        if (isset($map['OpenRate'])) {
            $model->openRate = $map['OpenRate'];
        }
        if (isset($map['PushNum'])) {
            $model->pushNum = $map['PushNum'];
        }
        if (isset($map['PushTotalNum'])) {
            $model->pushTotalNum = $map['PushTotalNum'];
        }

        return $model;
    }
}
