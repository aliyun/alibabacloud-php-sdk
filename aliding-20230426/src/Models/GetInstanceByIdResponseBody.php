<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceByIdResponseBody\actionExecutor;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceByIdResponseBody\originator;

class GetInstanceByIdResponseBody extends Model
{
    /**
     * @var actionExecutor[]
     */
    public $actionExecutor;
    /**
     * @var string
     */
    public $approvedResult;
    /**
     * @var string
     */
    public $createTimeGMT;
    /**
     * @var mixed[]
     */
    public $data;
    /**
     * @var string
     */
    public $formUuid;
    /**
     * @var string
     */
    public $instanceStatus;
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
    public $processCode;
    /**
     * @var string
     */
    public $processInstanceId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $vendorRequestId;
    /**
     * @var string
     */
    public $vendorType;
    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'actionExecutor'    => 'actionExecutor',
        'approvedResult'    => 'approvedResult',
        'createTimeGMT'     => 'createTimeGMT',
        'data'              => 'data',
        'formUuid'          => 'formUuid',
        'instanceStatus'    => 'instanceStatus',
        'modifiedTimeGMT'   => 'modifiedTimeGMT',
        'originator'        => 'originator',
        'processCode'       => 'processCode',
        'processInstanceId' => 'processInstanceId',
        'requestId'         => 'requestId',
        'title'             => 'title',
        'vendorRequestId'   => 'vendorRequestId',
        'vendorType'        => 'vendorType',
        'version'           => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->actionExecutor)) {
            Model::validateArray($this->actionExecutor);
        }
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->originator) {
            $this->originator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionExecutor) {
            if (\is_array($this->actionExecutor)) {
                $res['actionExecutor'] = [];
                $n1                    = 0;
                foreach ($this->actionExecutor as $item1) {
                    $res['actionExecutor'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->approvedResult) {
            $res['approvedResult'] = $this->approvedResult;
        }

        if (null !== $this->createTimeGMT) {
            $res['createTimeGMT'] = $this->createTimeGMT;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->formUuid) {
            $res['formUuid'] = $this->formUuid;
        }

        if (null !== $this->instanceStatus) {
            $res['instanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->modifiedTimeGMT) {
            $res['modifiedTimeGMT'] = $this->modifiedTimeGMT;
        }

        if (null !== $this->originator) {
            $res['originator'] = null !== $this->originator ? $this->originator->toArray($noStream) : $this->originator;
        }

        if (null !== $this->processCode) {
            $res['processCode'] = $this->processCode;
        }

        if (null !== $this->processInstanceId) {
            $res['processInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['actionExecutor'])) {
            if (!empty($map['actionExecutor'])) {
                $model->actionExecutor = [];
                $n1                    = 0;
                foreach ($map['actionExecutor'] as $item1) {
                    $model->actionExecutor[$n1++] = actionExecutor::fromMap($item1);
                }
            }
        }

        if (isset($map['approvedResult'])) {
            $model->approvedResult = $map['approvedResult'];
        }

        if (isset($map['createTimeGMT'])) {
            $model->createTimeGMT = $map['createTimeGMT'];
        }

        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                foreach ($map['data'] as $key1 => $value1) {
                    $model->data[$key1] = $value1;
                }
            }
        }

        if (isset($map['formUuid'])) {
            $model->formUuid = $map['formUuid'];
        }

        if (isset($map['instanceStatus'])) {
            $model->instanceStatus = $map['instanceStatus'];
        }

        if (isset($map['modifiedTimeGMT'])) {
            $model->modifiedTimeGMT = $map['modifiedTimeGMT'];
        }

        if (isset($map['originator'])) {
            $model->originator = originator::fromMap($map['originator']);
        }

        if (isset($map['processCode'])) {
            $model->processCode = $map['processCode'];
        }

        if (isset($map['processInstanceId'])) {
            $model->processInstanceId = $map['processInstanceId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
