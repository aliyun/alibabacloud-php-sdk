<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var int
     */
    public $abnormalCounts;

    /**
     * @var int
     */
    public $creatingCounts;

    /**
     * @var int
     */
    public $runningCounts;
    protected $_name = [
        'abnormalCounts' => 'AbnormalCounts',
        'creatingCounts' => 'CreatingCounts',
        'runningCounts' => 'RunningCounts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalCounts) {
            $res['AbnormalCounts'] = $this->abnormalCounts;
        }

        if (null !== $this->creatingCounts) {
            $res['CreatingCounts'] = $this->creatingCounts;
        }

        if (null !== $this->runningCounts) {
            $res['RunningCounts'] = $this->runningCounts;
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
        if (isset($map['AbnormalCounts'])) {
            $model->abnormalCounts = $map['AbnormalCounts'];
        }

        if (isset($map['CreatingCounts'])) {
            $model->creatingCounts = $map['CreatingCounts'];
        }

        if (isset($map['RunningCounts'])) {
            $model->runningCounts = $map['RunningCounts'];
        }

        return $model;
    }
}
