<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
        'rescaleJobParam'      => 'rescaleJobParam',
        'updateJobConfigParam' => 'updateJobConfigParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rescaleJobParam) {
            $res['rescaleJobParam'] = null !== $this->rescaleJobParam ? $this->rescaleJobParam->toMap() : null;
        }
        if (null !== $this->updateJobConfigParam) {
            $res['updateJobConfigParam'] = null !== $this->updateJobConfigParam ? $this->updateJobConfigParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotUpdateJobParams
     */
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
