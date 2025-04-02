<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormDataByIDResponseBody\originator;

class GetFormDataByIDResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $formData;

    /**
     * @var string
     */
    public $formInstId;

    /**
     * @var string
     */
    public $modifiedTimeGMT;

    /**
     * @var originator
     */
    public $originator;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'formData' => 'formData',
        'formInstId' => 'formInstId',
        'modifiedTimeGMT' => 'modifiedTimeGMT',
        'originator' => 'originator',
        'requestId' => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->formData)) {
            Model::validateArray($this->formData);
        }
        if (null !== $this->originator) {
            $this->originator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formData) {
            if (\is_array($this->formData)) {
                $res['formData'] = [];
                foreach ($this->formData as $key1 => $value1) {
                    $res['formData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->formInstId) {
            $res['formInstId'] = $this->formInstId;
        }

        if (null !== $this->modifiedTimeGMT) {
            $res['modifiedTimeGMT'] = $this->modifiedTimeGMT;
        }

        if (null !== $this->originator) {
            $res['originator'] = null !== $this->originator ? $this->originator->toArray($noStream) : $this->originator;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['formData'])) {
            if (!empty($map['formData'])) {
                $model->formData = [];
                foreach ($map['formData'] as $key1 => $value1) {
                    $model->formData[$key1] = $value1;
                }
            }
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
