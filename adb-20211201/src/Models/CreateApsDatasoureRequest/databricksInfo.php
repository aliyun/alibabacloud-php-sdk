<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest;

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
        'accessToken'  => 'AccessToken',
        'workspaceURL' => 'WorkspaceURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
