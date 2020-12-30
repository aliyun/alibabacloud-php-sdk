<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotUserStopResumeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $controlResult;
    protected $_name = [
        'controlResult' => 'ControlResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlResult) {
            $res['ControlResult'] = $this->controlResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlResult'])) {
            $model->controlResult = $map['ControlResult'];
        }

        return $model;
    }
}
