<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\createResultList;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateSiteMonitorResponseBody extends Model
{
    /**
     * @description The extended options of the protocol that is used by the site monitoring task. The options vary based on the protocol.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var createResultList
     */
    public $createResultList;

    /**
     * @description The result of the site monitoring task.
     *
     * @var data
     */
    public $data;

    /**
     * @description The URL or IP address that is monitored by the task.
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the alert rule.
     *
     * @example 68192f5d-0d45-4b98-9724-892813f86c71
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The interval at which detection requests are sent.
     *
     * Default value: 1.
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'createResultList' => 'CreateResultList',
        'data'             => 'Data',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createResultList) {
            $res['CreateResultList'] = null !== $this->createResultList ? $this->createResultList->toMap() : null;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSiteMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateResultList'])) {
            $model->createResultList = createResultList::fromMap($map['CreateResultList']);
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
