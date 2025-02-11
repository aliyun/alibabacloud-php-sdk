<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody\detectionItems\results;

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
     * @var results[]
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
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
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
            if (\is_array($this->results)) {
                $res['Results'] = [];
                $n1             = 0;
                foreach ($this->results as $item1) {
                    $res['Results'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['Results'])) {
                $model->results = [];
                $n1             = 0;
                foreach ($map['Results'] as $item1) {
                    $model->results[$n1++] = results::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
