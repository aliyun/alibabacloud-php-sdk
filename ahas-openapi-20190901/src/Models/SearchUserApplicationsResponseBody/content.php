<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\SearchUserApplicationsResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $appType;
    protected $_name = [
        'appName' => 'AppName',
        'appId'   => 'AppId',
        'appType' => 'AppType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        return $model;
    }
}
