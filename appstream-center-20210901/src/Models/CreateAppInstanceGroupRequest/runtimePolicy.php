<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\Tea\Model;

class runtimePolicy extends Model
{
    /**
     * @var string
     */
    public $sessionType;
    protected $_name = [
        'sessionType' => 'SessionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        return $model;
    }
}
