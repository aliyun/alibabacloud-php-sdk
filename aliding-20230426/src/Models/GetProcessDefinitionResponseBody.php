<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\originator;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\owners;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\tasks;
use AlibabaCloud\Tea\Model;

class GetProcessDefinitionResponseBody extends Model
{
    /**
     * @example FORM-EF6Y4xxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @var originator
     */
    public $originator;

    /**
     * @example agree
     *
     * @var string
     */
    public $outResult;

    /**
     * @var owners[]
     */
    public $owners;

    /**
     * @example proc-123
     *
     * @var string
     */
    public $processId;

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
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @var tasks[]
     */
    public $tasks;

    /**
     * @example 李四发起的请购单
     *
     * @var string
     */
    public $title;

    /**
     * @var mixed[]
     */
    public $variables;

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
        'formUuid'          => 'formUuid',
        'originator'        => 'originator',
        'outResult'         => 'outResult',
        'owners'            => 'owners',
        'processId'         => 'processId',
        'processInstanceId' => 'processInstanceId',
        'requestId'         => 'requestId',
        'status'            => 'status',
        'tasks'             => 'tasks',
        'title'             => 'title',
        'variables'         => 'variables',
        'vendorRequestId'   => 'vendorRequestId',
        'vendorType'        => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->formUuid) {
            $res['formUuid'] = $this->formUuid;
        }
        if (null !== $this->originator) {
            $res['originator'] = null !== $this->originator ? $this->originator->toMap() : null;
        }
        if (null !== $this->outResult) {
            $res['outResult'] = $this->outResult;
        }
        if (null !== $this->owners) {
            $res['owners'] = [];
            if (null !== $this->owners && \is_array($this->owners)) {
                $n = 0;
                foreach ($this->owners as $item) {
                    $res['owners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->processId) {
            $res['processId'] = $this->processId;
        }
        if (null !== $this->processInstanceId) {
            $res['processInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tasks) {
            $res['tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->variables) {
            $res['variables'] = $this->variables;
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
     * @return GetProcessDefinitionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['formUuid'])) {
            $model->formUuid = $map['formUuid'];
        }
        if (isset($map['originator'])) {
            $model->originator = originator::fromMap($map['originator']);
        }
        if (isset($map['outResult'])) {
            $model->outResult = $map['outResult'];
        }
        if (isset($map['owners'])) {
            if (!empty($map['owners'])) {
                $model->owners = [];
                $n             = 0;
                foreach ($map['owners'] as $item) {
                    $model->owners[$n++] = null !== $item ? owners::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['processId'])) {
            $model->processId = $map['processId'];
        }
        if (isset($map['processInstanceId'])) {
            $model->processInstanceId = $map['processInstanceId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tasks'])) {
            if (!empty($map['tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['variables'])) {
            $model->variables = $map['variables'];
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
