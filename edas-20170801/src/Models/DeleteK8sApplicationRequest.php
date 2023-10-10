<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteK8sApplicationRequest extends Model
{
    /**
     * @description The ID of the application that you want to delete. You can call the ListApplication operation to query the application ID.
     *
     * @example dbac7e3c-****-49bc-b6de-ffc550018b45
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to forcibly delete the application and disable application deletion protection.
     *
     * @example true
     *
     * @var bool
     */
    public $force;
    protected $_name = [
        'appId' => 'AppId',
        'force' => 'Force',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteK8sApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        return $model;
    }
}
