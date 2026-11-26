<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class AgentSandboxInfo extends Model
{
    /**
     * @var int
     */
    public $CPUCount;

    /**
     * @var string
     */
    public $collectedAt;

    /**
     * @var int
     */
    public $diskTotal;

    /**
     * @var int
     */
    public $memoryMB;
    protected $_name = [
        'CPUCount' => 'CPUCount',
        'collectedAt' => 'CollectedAt',
        'diskTotal' => 'DiskTotal',
        'memoryMB' => 'MemoryMB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPUCount) {
            $res['CPUCount'] = $this->CPUCount;
        }

        if (null !== $this->collectedAt) {
            $res['CollectedAt'] = $this->collectedAt;
        }

        if (null !== $this->diskTotal) {
            $res['DiskTotal'] = $this->diskTotal;
        }

        if (null !== $this->memoryMB) {
            $res['MemoryMB'] = $this->memoryMB;
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
        if (isset($map['CPUCount'])) {
            $model->CPUCount = $map['CPUCount'];
        }

        if (isset($map['CollectedAt'])) {
            $model->collectedAt = $map['CollectedAt'];
        }

        if (isset($map['DiskTotal'])) {
            $model->diskTotal = $map['DiskTotal'];
        }

        if (isset($map['MemoryMB'])) {
            $model->memoryMB = $map['MemoryMB'];
        }

        return $model;
    }
}
