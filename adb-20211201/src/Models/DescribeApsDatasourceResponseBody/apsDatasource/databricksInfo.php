<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource;

use AlibabaCloud\Dara\Model;

class databricksInfo extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $workspaceURL;
    protected $_name = [
        'accessToken'  => 'accessToken',
        'workspaceURL' => 'workspaceURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
