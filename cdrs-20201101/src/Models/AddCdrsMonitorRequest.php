<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class AddCdrsMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $batchIndicator;

    /**
     * @var string
     */
    public $algorithmVendor;

    /**
     * @var string
     */
    public $notifierType;

    /**
     * @var string
     */
    public $notifierUrl;

    /**
     * @var string
     */
    public $notifierAppSecret;

    /**
     * @var int
     */
    public $notifierTimeOut;

    /**
     * @var string
     */
    public $notifierExtendValues;
    protected $_name = [
        'corpId'               => 'CorpId',
        'monitorType'          => 'MonitorType',
        'description'          => 'Description',
        'batchIndicator'       => 'BatchIndicator',
        'algorithmVendor'      => 'AlgorithmVendor',
        'notifierType'         => 'NotifierType',
        'notifierUrl'          => 'NotifierUrl',
        'notifierAppSecret'    => 'NotifierAppSecret',
        'notifierTimeOut'      => 'NotifierTimeOut',
        'notifierExtendValues' => 'NotifierExtendValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->batchIndicator) {
            $res['BatchIndicator'] = $this->batchIndicator;
        }
        if (null !== $this->algorithmVendor) {
            $res['AlgorithmVendor'] = $this->algorithmVendor;
        }
        if (null !== $this->notifierType) {
            $res['NotifierType'] = $this->notifierType;
        }
        if (null !== $this->notifierUrl) {
            $res['NotifierUrl'] = $this->notifierUrl;
        }
        if (null !== $this->notifierAppSecret) {
            $res['NotifierAppSecret'] = $this->notifierAppSecret;
        }
        if (null !== $this->notifierTimeOut) {
            $res['NotifierTimeOut'] = $this->notifierTimeOut;
        }
        if (null !== $this->notifierExtendValues) {
            $res['NotifierExtendValues'] = $this->notifierExtendValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCdrsMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['BatchIndicator'])) {
            $model->batchIndicator = $map['BatchIndicator'];
        }
        if (isset($map['AlgorithmVendor'])) {
            $model->algorithmVendor = $map['AlgorithmVendor'];
        }
        if (isset($map['NotifierType'])) {
            $model->notifierType = $map['NotifierType'];
        }
        if (isset($map['NotifierUrl'])) {
            $model->notifierUrl = $map['NotifierUrl'];
        }
        if (isset($map['NotifierAppSecret'])) {
            $model->notifierAppSecret = $map['NotifierAppSecret'];
        }
        if (isset($map['NotifierTimeOut'])) {
            $model->notifierTimeOut = $map['NotifierTimeOut'];
        }
        if (isset($map['NotifierExtendValues'])) {
            $model->notifierExtendValues = $map['NotifierExtendValues'];
        }

        return $model;
    }
}
