<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models\PostMSDataProcessingCountResponseBody;

use AlibabaCloud\SDK\Alinlp\V20200629\Models\PostMSDataProcessingCountResponseBody\data\dataProcessedStatuses;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dataProcessedStatuses[]
     */
    public $dataProcessedStatuses;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'dataProcessedStatuses' => 'DataProcessedStatuses',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataProcessedStatuses) {
            $res['DataProcessedStatuses'] = [];
            if (null !== $this->dataProcessedStatuses && \is_array($this->dataProcessedStatuses)) {
                $n = 0;
                foreach ($this->dataProcessedStatuses as $item) {
                    $res['DataProcessedStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataProcessedStatuses'])) {
            if (!empty($map['DataProcessedStatuses'])) {
                $model->dataProcessedStatuses = [];
                $n                            = 0;
                foreach ($map['DataProcessedStatuses'] as $item) {
                    $model->dataProcessedStatuses[$n++] = null !== $item ? dataProcessedStatuses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
