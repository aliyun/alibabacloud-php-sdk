<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource;

use AlibabaCloud\Tea\Model;

class databricksInfo extends Model
{
    /**
     * @example ******
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example -
     *
     * @var string
     */
    public $workspaceURL;
    protected $_name = [
        'accessToken'  => 'accessToken',
        'workspaceURL' => 'workspaceURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->workspaceURL) {
            $res['workspaceURL'] = $this->workspaceURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databricksInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['workspaceURL'])) {
            $model->workspaceURL = $map['workspaceURL'];
        }

        return $model;
    }
}
