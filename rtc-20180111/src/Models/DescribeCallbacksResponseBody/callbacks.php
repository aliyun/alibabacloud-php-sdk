<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallbacksResponseBody;

use AlibabaCloud\Tea\Model;

class callbacks extends Model
{
    /**
     * @example RecordEvent
     *
     * @var string
     */
    public $category;

    /**
     * @example 1
     *
     * @var string
     */
    public $checkStatus;

    /**
     * @example RESPONSE_INVALID
     *
     * @var string
     */
    public $code;

    /**
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $conf;

    /**
     * @example Success
     *
     * @var string
     */
    public $msg;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var int[]
     */
    public $subEvent;
    protected $_name = [
        'category'    => 'Category',
        'checkStatus' => 'CheckStatus',
        'code'        => 'Code',
        'conf'        => 'Conf',
        'msg'         => 'Msg',
        'status'      => 'Status',
        'subEvent'    => 'SubEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subEvent) {
            $res['SubEvent'] = $this->subEvent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callbacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubEvent'])) {
            if (!empty($map['SubEvent'])) {
                $model->subEvent = $map['SubEvent'];
            }
        }

        return $model;
    }
}
