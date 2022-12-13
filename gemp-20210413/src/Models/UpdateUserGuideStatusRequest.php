<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserGuideStatusRequest extends Model
{
    /**
     * @example FD200FAE-E98F-496E-BFE6-4CE61E59A2E9
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example SERVICE_GROUP_GUIDE
     *
     * @var string
     */
    public $guideAction;
    protected $_name = [
        'clientToken' => 'clientToken',
        'guideAction' => 'guideAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->guideAction) {
            $res['guideAction'] = $this->guideAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserGuideStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['guideAction'])) {
            $model->guideAction = $map['guideAction'];
        }

        return $model;
    }
}
