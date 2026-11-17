<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetWorkspaceResponseBody\workspace;

use AlibabaCloud\Dara\Model;

class features extends Model
{
    /**
     * @var bool
     */
    public $fineGrainedAuthz;
    protected $_name = [
        'fineGrainedAuthz' => 'fineGrainedAuthz',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fineGrainedAuthz) {
            $res['fineGrainedAuthz'] = $this->fineGrainedAuthz;
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
        if (isset($map['fineGrainedAuthz'])) {
            $model->fineGrainedAuthz = $map['fineGrainedAuthz'];
        }

        return $model;
    }
}
