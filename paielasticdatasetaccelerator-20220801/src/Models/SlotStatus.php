<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class SlotStatus extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var SlotStatusDetail
     */
    public $detail;

    /**
     * @example Init Succeed
     *
     * @var string
     */
    public $message;

    /**
     * @example Running
     *
     * @var string
     */
    public $phase;
    protected $_name = [
        'code'    => 'Code',
        'detail'  => 'Detail',
        'message' => 'Message',
        'phase'   => 'Phase',
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
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SlotStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Detail'])) {
            $model->detail = SlotStatusDetail::fromMap($map['Detail']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        return $model;
    }
}
