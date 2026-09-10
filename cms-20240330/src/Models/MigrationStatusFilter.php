<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class MigrationStatusFilter extends Model
{
    /**
     * @var bool
     */
    public $isMigrated;
    protected $_name = [
        'isMigrated' => 'isMigrated',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isMigrated) {
            $res['isMigrated'] = $this->isMigrated;
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
        if (isset($map['isMigrated'])) {
            $model->isMigrated = $map['isMigrated'];
        }

        return $model;
    }
}
