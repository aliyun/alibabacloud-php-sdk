<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest;

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
     * @example xxxxx
     *
     * @var string
     */
    public $workspaceURL;
    protected $_name = [
        'accessToken'  => 'AccessToken',
        'workspaceURL' => 'WorkspaceURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->workspaceURL) {
            $res['WorkspaceURL'] = $this->workspaceURL;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['WorkspaceURL'])) {
            $model->workspaceURL = $map['WorkspaceURL'];
        }

        return $model;
    }
}
