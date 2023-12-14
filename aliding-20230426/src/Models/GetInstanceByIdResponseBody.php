<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceByIdResponseBody\actionExecutor;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceByIdResponseBody\originator;
use AlibabaCloud\Tea\Model;

class GetInstanceByIdResponseBody extends Model
{
    /**
     * @var actionExecutor[]
     */
    public $actionExecutor;

    /**
     * @example agree
     *
     * @var string
     */
    public $approvedResult;

    /**
     * @example 2021-05-01
     *
     * @var string
     */
    public $createTimeGMT;

    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @example FORM-EF6Y4xxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

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
     * @example TPROC--X1Gxxx
     *
     * @var string
     */
    public $processCode;

    /**
     * @example f30233fb-72e1-4xxx
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 李四发起的请购单
     *
     * @var string
     */
    public $title;

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

    /**
     * @example 1
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionExecutor) {
            $res['actionExecutor'] = [];
            if (null !== $this->actionExecutor && \is_array($this->actionExecutor)) {
                $n = 0;
                foreach ($this->actionExecutor as $item) {
                    $res['actionExecutor'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['data'] = $this->data;
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
            $res['originator'] = null !== $this->originator ? $this->originator->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return GetInstanceByIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionExecutor'])) {
            if (!empty($map['actionExecutor'])) {
                $model->actionExecutor = [];
                $n                     = 0;
                foreach ($map['actionExecutor'] as $item) {
                    $model->actionExecutor[$n++] = null !== $item ? actionExecutor::fromMap($item) : $item;
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
            $model->data = $map['data'];
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
