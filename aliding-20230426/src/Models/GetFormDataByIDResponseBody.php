<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormDataByIDResponseBody\originator;
use AlibabaCloud\Tea\Model;

class GetFormDataByIDResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $formData;

    /**
     * @example FORM_INST_12345
     *
     * @var string
     */
    public $formInstId;

    /**
     * @example 2021-05-01
     *
     * @var string
     */
    public $modifiedTimeGMT;

    /**
     * @var originator
     */
    public $originator;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'formData'        => 'formData',
        'formInstId'      => 'formInstId',
        'modifiedTimeGMT' => 'modifiedTimeGMT',
        'originator'      => 'originator',
        'requestId'       => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType'      => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->formData) {
            $res['formData'] = $this->formData;
        }
        if (null !== $this->formInstId) {
            $res['formInstId'] = $this->formInstId;
        }
        if (null !== $this->modifiedTimeGMT) {
            $res['modifiedTimeGMT'] = $this->modifiedTimeGMT;
        }
        if (null !== $this->originator) {
            $res['originator'] = null !== $this->originator ? $this->originator->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFormDataByIDResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['formData'])) {
            $model->formData = $map['formData'];
        }
        if (isset($map['formInstId'])) {
            $model->formInstId = $map['formInstId'];
        }
        if (isset($map['modifiedTimeGMT'])) {
            $model->modifiedTimeGMT = $map['modifiedTimeGMT'];
        }
        if (isset($map['originator'])) {
            $model->originator = originator::fromMap($map['originator']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
