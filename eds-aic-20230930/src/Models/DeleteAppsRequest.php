<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteAppsRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdList;
    protected $_name = [
        'appIdList' => 'AppIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIdList) {
            $res['AppIdList'] = $this->appIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIdList'])) {
            if (!empty($map['AppIdList'])) {
                $model->appIdList = $map['AppIdList'];
            }
        }

        return $model;
    }
}
