<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusResponseBody;

use AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusResponseBody\data\documents;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var documents[]
     */
    public $documents;

    /**
     * @example 66122af12a4e45ddae6bd6c845556647
     *
     * @var string
     */
    public $jobId;

    /**
     * @example PENDING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'documents' => 'Documents',
        'jobId'     => 'JobId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documents) {
            $res['Documents'] = [];
            if (null !== $this->documents && \is_array($this->documents)) {
                $n = 0;
                foreach ($this->documents as $item) {
                    $res['Documents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = [];
                $n                = 0;
                foreach ($map['Documents'] as $item) {
                    $model->documents[$n++] = null !== $item ? documents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
