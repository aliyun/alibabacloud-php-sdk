<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\EntityGroupBase;

use AlibabaCloud\Dara\Model;

class entityQueries extends Model
{
    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $spl;
    protected $_name = [
        'entityType' => 'entityType',
        'spl' => 'spl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
        }

        if (null !== $this->spl) {
            $res['spl'] = $this->spl;
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
        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }

        if (isset($map['spl'])) {
            $model->spl = $map['spl'];
        }

        return $model;
    }
}
