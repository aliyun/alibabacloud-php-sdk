<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\JobDriver\sparkSubmit;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sparkSubmit) {
            $res['sparkSubmit'] = null !== $this->sparkSubmit ? $this->sparkSubmit->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobDriver
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sparkSubmit'])) {
            $model->sparkSubmit = sparkSubmit::fromMap($map['sparkSubmit']);
        }

        return $model;
    }
}
