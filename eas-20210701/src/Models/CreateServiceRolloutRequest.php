<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceRolloutRequest\batch;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceRolloutRequest\partition;

class CreateServiceRolloutRequest extends Model
{
    /**
     * @var batch
     */
    public $batch;

    /**
     * @var partition
     */
    public $partition;

    /**
     * @var bool
     */
    public $paused;
    protected $_name = [
        'batch' => 'Batch',
        'partition' => 'Partition',
        'paused' => 'Paused',
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

        if (null !== $this->paused) {
            $res['Paused'] = $this->paused;
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

        if (isset($map['Paused'])) {
            $model->paused = $map['Paused'];
        }

        return $model;
    }
}
