<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SetAppNameRequest extends Model
{
    /**
     * @var string
     */
    public $appID;

    /**
     * @var string
     */
    public $appName;
    protected $_name = [
        'appID'   => 'AppID',
        'appName' => 'AppName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appID) {
            $res['AppID'] = $this->appID;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAppNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}
