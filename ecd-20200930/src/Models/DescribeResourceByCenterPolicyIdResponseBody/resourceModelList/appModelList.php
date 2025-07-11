<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceByCenterPolicyIdResponseBody\resourceModelList;

use AlibabaCloud\Tea\Model;

class appModelList extends Model
{
    /**
     * @description The application ID. This parameter is only applicable to cloud applications.
     *
     * @example 18
     *
     * @var string
     */
    public $appId;

    /**
     * @description The application name.
     *
     * @example alipic-powergem
     *
     * @var string
     */
    public $appName;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}
