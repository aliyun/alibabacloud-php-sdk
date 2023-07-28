<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppInfoRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     *   Default value: **app-1000000**.
     *   For more information, see [Overview](~~113600~~).
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     *   The name can contain up to 128 characters in length, including Chinese letters, digits, and periods (.), dash (-), and at character (@).
     *   The name can contain only UTF-8 characters.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The description of the application.
     *
     *   The description can contain up to 512 characters in length.
     *   The description can contain only UTF-8 characters.
     *
     * @example my first app.
     *
     * @var string
     */
    public $description;

    /**
     * @description The status of the application. Valid values:
     *
     *   **Normal**
     *   **Disable**
     *
     * @example Disable
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'description' => 'Description',
        'status'      => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppInfoRequest
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
