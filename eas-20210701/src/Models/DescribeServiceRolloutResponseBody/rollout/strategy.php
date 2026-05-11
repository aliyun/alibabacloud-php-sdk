<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceRolloutResponseBody\rollout;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceRolloutResponseBody\rollout\strategy\batch;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceRolloutResponseBody\rollout\strategy\partition;

class strategy extends Model
{
    /**
     * @var batch
     */
    public $batch;

    /**
     * @var partition
     */
    public $partition;
    protected $_name = [
        'batch' => 'Batch',
        'partition' => 'Partition',
    ];

    public function validate()
    {
        if (null !== $this->batch) {
            $this->batch->validate();
        }
        if (null !== $this->partition) {
            $this->partition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batch) {
            $res['Batch'] = null !== $this->batch ? $this->batch->toArray($noStream) : $this->batch;
        }

        if (null !== $this->partition) {
            $res['Partition'] = null !== $this->partition ? $this->partition->toArray($noStream) : $this->partition;
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
        if (isset($map['Batch'])) {
            $model->batch = batch::fromMap($map['Batch']);
        }

        if (isset($map['Partition'])) {
            $model->partition = partition::fromMap($map['Partition']);
        }

        return $model;
    }
}
