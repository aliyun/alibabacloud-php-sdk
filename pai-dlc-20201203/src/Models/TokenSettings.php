<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class TokenSettings extends Model
{
    /**
     * @var bool
     */
    public $enableCrossAccountAccess;

    /**
     * @var bool
     */
    public $enableLogDownloadJob;
    protected $_name = [
        'enableCrossAccountAccess' => 'EnableCrossAccountAccess',
        'enableLogDownloadJob' => 'EnableLogDownloadJob',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableCrossAccountAccess) {
            $res['EnableCrossAccountAccess'] = $this->enableCrossAccountAccess;
        }

        if (null !== $this->enableLogDownloadJob) {
            $res['EnableLogDownloadJob'] = $this->enableLogDownloadJob;
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
        if (isset($map['EnableCrossAccountAccess'])) {
            $model->enableCrossAccountAccess = $map['EnableCrossAccountAccess'];
        }

        if (isset($map['EnableLogDownloadJob'])) {
            $model->enableLogDownloadJob = $map['EnableLogDownloadJob'];
        }

        return $model;
    }
}
