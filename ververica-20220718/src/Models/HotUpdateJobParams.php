<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class HotUpdateJobParams extends Model
{
    /**
     * @var RescaleJobParam
     */
    public $rescaleJobParam;

    /**
     * @var UpdateJobConfigParam
     */
    public $updateJobConfigParam;
    protected $_name = [
        'rescaleJobParam' => 'rescaleJobParam',
        'updateJobConfigParam' => 'updateJobConfigParam',
    ];

    public function validate()
    {
        if (null !== $this->rescaleJobParam) {
            $this->rescaleJobParam->validate();
        }
        if (null !== $this->updateJobConfigParam) {
            $this->updateJobConfigParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rescaleJobParam) {
            $res['rescaleJobParam'] = null !== $this->rescaleJobParam ? $this->rescaleJobParam->toArray($noStream) : $this->rescaleJobParam;
        }

        if (null !== $this->updateJobConfigParam) {
            $res['updateJobConfigParam'] = null !== $this->updateJobConfigParam ? $this->updateJobConfigParam->toArray($noStream) : $this->updateJobConfigParam;
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
        if (isset($map['rescaleJobParam'])) {
            $model->rescaleJobParam = RescaleJobParam::fromMap($map['rescaleJobParam']);
        }

        if (isset($map['updateJobConfigParam'])) {
            $model->updateJobConfigParam = UpdateJobConfigParam::fromMap($map['updateJobConfigParam']);
        }

        return $model;
    }
}
