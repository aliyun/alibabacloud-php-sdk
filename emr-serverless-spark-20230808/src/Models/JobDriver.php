<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\JobDriver\sparkSubmit;

class JobDriver extends Model
{
    /**
     * @var sparkSubmit
     */
    public $sparkSubmit;
    protected $_name = [
        'sparkSubmit' => 'sparkSubmit',
    ];

    public function validate()
    {
        if (null !== $this->sparkSubmit) {
            $this->sparkSubmit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sparkSubmit) {
            $res['sparkSubmit'] = null !== $this->sparkSubmit ? $this->sparkSubmit->toArray($noStream) : $this->sparkSubmit;
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
        if (isset($map['sparkSubmit'])) {
            $model->sparkSubmit = sparkSubmit::fromMap($map['sparkSubmit']);
        }

        return $model;
    }
}
