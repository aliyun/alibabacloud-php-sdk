<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallbacksResponseBody;

use AlibabaCloud\Dara\Model;

class callbacks extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $checkStatus;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $conf;
    /**
     * @var string
     */
    public $msg;
    /**
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
        if (\is_array($this->subEvent)) {
            Model::validateArray($this->subEvent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->subEvent)) {
                $res['SubEvent'] = [];
                $n1              = 0;
                foreach ($this->subEvent as $item1) {
                    $res['SubEvent'][$n1++] = $item1;
                }
            }
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
                $model->subEvent = [];
                $n1              = 0;
                foreach ($map['SubEvent'] as $item1) {
                    $model->subEvent[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
