<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsByApiProductResponseBody\authorizedApps;

use AlibabaCloud\Tea\Model;

class authorizedApp extends Model
{
    /**
     * @description The application ID.
     *
     * @example 110982419
     *
     * @var int
     */
    public $appId;

    /**
     * @description The application name.
     *
     * @example APP_02580_DEV
     *
     * @var string
     */
    public $appName;

    /**
     * @description The expiration time of the authorization. The time is in GMT. An empty value indicates that the authorization does not expire.
     *
     * @example 2023-06-17T03:41:53Z
     *
     * @var string
     */
    public $authValidTime;

    /**
     * @description The time when the authorization was created. The time is in GMT.
     *
     * @example 2016-07-21T06:17:20Z
     *
     * @var string
     */
    public $authorizedTime;

    /**
     * @description The authorization description.
     *
     * @example Test share with nsc qiming
     *
     * @var string
     */
    public $description;

    /**
     * @description The extended information.
     *
     * @example extra info
     *
     * @var string
     */
    public $extend;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'authValidTime' => 'AuthValidTime',
        'authorizedTime' => 'AuthorizedTime',
        'description' => 'Description',
        'extend' => 'Extend',
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
        if (null !== $this->authValidTime) {
            $res['AuthValidTime'] = $this->authValidTime;
        }
        if (null !== $this->authorizedTime) {
            $res['AuthorizedTime'] = $this->authorizedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedApp
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
        if (isset($map['AuthValidTime'])) {
            $model->authValidTime = $map['AuthValidTime'];
        }
        if (isset($map['AuthorizedTime'])) {
            $model->authorizedTime = $map['AuthorizedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        return $model;
    }
}
