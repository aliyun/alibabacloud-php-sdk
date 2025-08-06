<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DataImageRegionDistributeMapValue extends Model
{
    /**
     * @var string
     */
    public $distributeStatus;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'distributeStatus' => 'DistributeStatus',
        'progress' => 'Progress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distributeStatus) {
            $res['DistributeStatus'] = $this->distributeStatus;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (isset($map['DistributeStatus'])) {
            $model->distributeStatus = $map['DistributeStatus'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
