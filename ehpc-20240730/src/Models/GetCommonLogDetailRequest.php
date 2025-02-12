<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class GetCommonLogDetailRequest extends Model
{
    /**
     * @var int
     */
    public $from;
    /**
     * @var bool
     */
    public $hiddenProcess;
    /**
     * @var string
     */
    public $logRequestId;
    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'from'          => 'From',
        'hiddenProcess' => 'HiddenProcess',
        'logRequestId'  => 'LogRequestId',
        'to'            => 'To',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->hiddenProcess) {
            $res['HiddenProcess'] = $this->hiddenProcess;
        }

        if (null !== $this->logRequestId) {
            $res['LogRequestId'] = $this->logRequestId;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['HiddenProcess'])) {
            $model->hiddenProcess = $map['HiddenProcess'];
        }

        if (isset($map['LogRequestId'])) {
            $model->logRequestId = $map['LogRequestId'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
