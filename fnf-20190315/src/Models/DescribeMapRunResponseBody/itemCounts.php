<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeMapRunResponseBody;

use AlibabaCloud\Dara\Model;

class itemCounts extends Model
{
    /**
     * @var int
     */
    public $aborted;

    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $pending;

    /**
     * @var int
     */
    public $running;

    /**
     * @var int
     */
    public $succeed;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'aborted' => 'Aborted',
        'failed' => 'Failed',
        'pending' => 'Pending',
        'running' => 'Running',
        'succeed' => 'Succeed',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aborted) {
            $res['Aborted'] = $this->aborted;
        }

        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }

        if (null !== $this->pending) {
            $res['Pending'] = $this->pending;
        }

        if (null !== $this->running) {
            $res['Running'] = $this->running;
        }

        if (null !== $this->succeed) {
            $res['Succeed'] = $this->succeed;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Aborted'])) {
            $model->aborted = $map['Aborted'];
        }

        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }

        if (isset($map['Pending'])) {
            $model->pending = $map['Pending'];
        }

        if (isset($map['Running'])) {
            $model->running = $map['Running'];
        }

        if (isset($map['Succeed'])) {
            $model->succeed = $map['Succeed'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
