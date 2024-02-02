<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class imageOptions extends Model
{
    /**
     * @description Specifies whether the instance that uses the image support logons from the ecs-user user. Valid values:
     *
     * - false
     * @example false
     *
     * @var bool
     */
    public $loginAsNonRoot;
    protected $_name = [
        'loginAsNonRoot' => 'LoginAsNonRoot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginAsNonRoot) {
            $res['LoginAsNonRoot'] = $this->loginAsNonRoot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginAsNonRoot'])) {
            $model->loginAsNonRoot = $map['LoginAsNonRoot'];
        }

        return $model;
    }
}
