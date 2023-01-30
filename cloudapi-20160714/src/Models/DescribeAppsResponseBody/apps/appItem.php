<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsResponseBody\apps;

use AlibabaCloud\Tea\Model;

class appItem extends Model
{
    /**
     * @description *   This API is intended for API providers.
     *   API providers can use the app IDs or their Apsara Stack tenant accounts to query app information.
     *   Each provider can call this operation for a maximum of 200 times every day in a region.
     *
     * @example 20112314518278
     *
     * @var int
     */
    public $appId;

    /**
     * @description The description of the app.
     *
     * @example CreateApptest
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the app.
     *
     * @example App test
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'description' => 'Description',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appItem
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
