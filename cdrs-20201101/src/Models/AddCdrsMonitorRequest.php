<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class AddCdrsMonitorRequest extends Model
{
    /**
     * @example damo
     *
     * @var string
     */
    public $algorithmVendor;

    /**
     * @example 0
     *
     * @var int
     */
    public $batchIndicator;

    /**
     * @example 10001
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example face
     *
     * @var string
     */
    public $monitorType;

    /**
     * @example mySecret
     *
     * @var string
     */
    public $notifierAppSecret;

    /**
     * @example {\"userId\": \"1\" }
     *
     * @var string
     */
    public $notifierExtendValues;

    /**
     * @example 2000
     *
     * @var int
     */
    public $notifierTimeOut;

    /**
     * @example webhook
     *
     * @var string
     */
    public $notifierType;

    /**
     * @example http://oapi.dingtalk.com/robot/send
     *
     * @var string
     */
    public $notifierUrl;
    protected $_name = [
        'algorithmVendor'      => 'AlgorithmVendor',
        'batchIndicator'       => 'BatchIndicator',
        'corpId'               => 'CorpId',
        'description'          => 'Description',
        'monitorType'          => 'MonitorType',
        'notifierAppSecret'    => 'NotifierAppSecret',
        'notifierExtendValues' => 'NotifierExtendValues',
        'notifierTimeOut'      => 'NotifierTimeOut',
        'notifierType'         => 'NotifierType',
        'notifierUrl'          => 'NotifierUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmVendor) {
            $res['AlgorithmVendor'] = $this->algorithmVendor;
        }
        if (null !== $this->batchIndicator) {
            $res['BatchIndicator'] = $this->batchIndicator;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }
        if (null !== $this->notifierAppSecret) {
            $res['NotifierAppSecret'] = $this->notifierAppSecret;
        }
        if (null !== $this->notifierExtendValues) {
            $res['NotifierExtendValues'] = $this->notifierExtendValues;
        }
        if (null !== $this->notifierTimeOut) {
            $res['NotifierTimeOut'] = $this->notifierTimeOut;
        }
        if (null !== $this->notifierType) {
            $res['NotifierType'] = $this->notifierType;
        }
        if (null !== $this->notifierUrl) {
            $res['NotifierUrl'] = $this->notifierUrl;
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
        if (isset($map['AlgorithmVendor'])) {
            $model->algorithmVendor = $map['AlgorithmVendor'];
        }
        if (isset($map['BatchIndicator'])) {
            $model->batchIndicator = $map['BatchIndicator'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }
        if (isset($map['NotifierAppSecret'])) {
            $model->notifierAppSecret = $map['NotifierAppSecret'];
        }
        if (isset($map['NotifierExtendValues'])) {
            $model->notifierExtendValues = $map['NotifierExtendValues'];
        }
        if (isset($map['NotifierTimeOut'])) {
            $model->notifierTimeOut = $map['NotifierTimeOut'];
        }
        if (isset($map['NotifierType'])) {
            $model->notifierType = $map['NotifierType'];
        }
        if (isset($map['NotifierUrl'])) {
            $model->notifierUrl = $map['NotifierUrl'];
        }

        return $model;
    }
}
