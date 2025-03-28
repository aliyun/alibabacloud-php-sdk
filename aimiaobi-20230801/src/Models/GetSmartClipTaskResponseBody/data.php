<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponseBody\data\subJobs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @var subJobs[]
     */
    public $subJobs;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'status' => 'Status',
        'subJobs' => 'SubJobs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subJobs) {
            $res['SubJobs'] = [];
            if (null !== $this->subJobs && \is_array($this->subJobs)) {
                $n = 0;
                foreach ($this->subJobs as $item) {
                    $res['SubJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubJobs'])) {
            if (!empty($map['SubJobs'])) {
                $model->subJobs = [];
                $n = 0;
                foreach ($map['SubJobs'] as $item) {
                    $model->subJobs[$n++] = null !== $item ? subJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
