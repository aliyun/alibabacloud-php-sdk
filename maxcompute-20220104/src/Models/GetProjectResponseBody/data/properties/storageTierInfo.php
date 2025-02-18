<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\storageTierInfo\storageTierSize;

class storageTierInfo extends Model
{
    /**
     * @var int
     */
    public $projectBackupSize;
    /**
     * @var int
     */
    public $projectTotalSize;
    /**
     * @var storageTierSize
     */
    public $storageTierSize;
    protected $_name = [
        'projectBackupSize' => 'projectBackupSize',
        'projectTotalSize'  => 'projectTotalSize',
        'storageTierSize'   => 'storageTierSize',
    ];

    public function validate()
    {
        if (null !== $this->storageTierSize) {
            $this->storageTierSize->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectBackupSize) {
            $res['projectBackupSize'] = $this->projectBackupSize;
        }

        if (null !== $this->projectTotalSize) {
            $res['projectTotalSize'] = $this->projectTotalSize;
        }

        if (null !== $this->storageTierSize) {
            $res['storageTierSize'] = null !== $this->storageTierSize ? $this->storageTierSize->toArray($noStream) : $this->storageTierSize;
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
        if (isset($map['projectBackupSize'])) {
            $model->projectBackupSize = $map['projectBackupSize'];
        }

        if (isset($map['projectTotalSize'])) {
            $model->projectTotalSize = $map['projectTotalSize'];
        }

        if (isset($map['storageTierSize'])) {
            $model->storageTierSize = storageTierSize::fromMap($map['storageTierSize']);
        }

        return $model;
    }
}
