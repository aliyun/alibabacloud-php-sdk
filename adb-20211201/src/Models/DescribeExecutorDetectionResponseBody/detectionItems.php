<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems\results;

class detectionItems extends Model
{
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $name;
    /**
     * @var results
     */
    public $results;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'message' => 'Message',
        'name'    => 'Name',
        'results' => 'Results',
        'status'  => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->results) {
            $this->results->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toArray($noStream) : $this->results;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
