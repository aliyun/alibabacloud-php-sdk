<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyAppRequest extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example https://defaultIcon.png
     *
     * @var string
     */
    public $iconUrl;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'description' => 'Description',
        'iconUrl'     => 'IconUrl',
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
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppRequest
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
        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        return $model;
    }
}
