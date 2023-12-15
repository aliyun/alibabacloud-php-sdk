<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody\result;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody\result\diagnostics\range;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody\result\diagnostics\trace;
use AlibabaCloud\Tea\Model;

class diagnostics extends Model
{
    /**
     * @var string
     */
    public $advice;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $message;

    /**
     * @var range[]
     */
    public $range;

    /**
     * @var int
     */
    public $severity;

    /**
     * @var string
     */
    public $source;

    /**
     * @var trace[]
     */
    public $trace;
    protected $_name = [
        'advice'   => 'Advice',
        'code'     => 'Code',
        'detail'   => 'Detail',
        'message'  => 'Message',
        'range'    => 'Range',
        'severity' => 'Severity',
        'source'   => 'Source',
        'trace'    => 'Trace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->range) {
            $res['Range'] = [];
            if (null !== $this->range && \is_array($this->range)) {
                $n = 0;
                foreach ($this->range as $item) {
                    $res['Range'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->trace) {
            $res['Trace'] = [];
            if (null !== $this->trace && \is_array($this->trace)) {
                $n = 0;
                foreach ($this->trace as $item) {
                    $res['Trace'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnostics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Range'])) {
            if (!empty($map['Range'])) {
                $model->range = [];
                $n            = 0;
                foreach ($map['Range'] as $item) {
                    $model->range[$n++] = null !== $item ? range::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Trace'])) {
            if (!empty($map['Trace'])) {
                $model->trace = [];
                $n            = 0;
                foreach ($map['Trace'] as $item) {
                    $model->trace[$n++] = null !== $item ? trace::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
