<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class UpdateJobConfigParam extends Model
{
    /**
     * @var mixed[]
     */
    public $newFlinkConf;
    protected $_name = [
        'newFlinkConf' => 'newFlinkConf',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newFlinkConf) {
            $res['newFlinkConf'] = $this->newFlinkConf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJobConfigParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['newFlinkConf'])) {
            $model->newFlinkConf = $map['newFlinkConf'];
        }

        return $model;
    }
}
