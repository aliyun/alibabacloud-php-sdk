<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateContainerRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $buildPackId;
    protected $_name = [
        'appId'       => 'AppId',
        'buildPackId' => 'BuildPackId',
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
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContainerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }

        return $model;
    }
}
