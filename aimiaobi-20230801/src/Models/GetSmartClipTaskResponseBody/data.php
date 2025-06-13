<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponseBody\data\subJobs;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
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

    public function validate()
    {
        if (\is_array($this->subJobs)) {
            Model::validateArray($this->subJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subJobs) {
            if (\is_array($this->subJobs)) {
                $res['SubJobs'] = [];
                $n1 = 0;
                foreach ($this->subJobs as $item1) {
                    $res['SubJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubJobs'])) {
            if (!empty($map['SubJobs'])) {
                $model->subJobs = [];
                $n1 = 0;
                foreach ($map['SubJobs'] as $item1) {
                    $model->subJobs[$n1] = subJobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
