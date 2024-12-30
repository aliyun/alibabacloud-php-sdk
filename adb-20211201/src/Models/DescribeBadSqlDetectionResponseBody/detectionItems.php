<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody\detectionItems\results;
use AlibabaCloud\Tea\Model;

class detectionItems extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @example Cost
     *
     * @var string
     */
    public $name;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @example WARNING
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectionItems
     */
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
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
