<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ProjectAddResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 530404
     *
     * @var int
     */
    public $module;

    /**
     * @example true
     *
     * @var bool
     */
    public $morePage;

    /**
     * @example B72B39C8-32DE-558D-AD1C-D53F11F6ADFE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 21041ce316577904808056433edbb2
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code'      => 'code',
        'message'   => 'message',
        'module'    => 'module',
        'morePage'  => 'more_page',
        'requestId' => 'requestId',
        'success'   => 'success',
        'traceId'   => 'traceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->module) {
            $res['module'] = $this->module;
        }
        if (null !== $this->morePage) {
            $res['more_page'] = $this->morePage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProjectAddResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['module'])) {
            $model->module = $map['module'];
        }
        if (isset($map['more_page'])) {
            $model->morePage = $map['more_page'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
