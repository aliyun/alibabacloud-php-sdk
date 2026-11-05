<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserAppUsageTimeRankResponseBody;

use AlibabaCloud\Dara\Model;

class indexData extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appTimeCnt;

    /**
     * @var string
     */
    public $appVersion;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appTimeCnt' => 'AppTimeCnt',
        'appVersion' => 'AppVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appTimeCnt) {
            $res['AppTimeCnt'] = $this->appTimeCnt;
        }

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppTimeCnt'])) {
            $model->appTimeCnt = $map['AppTimeCnt'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        return $model;
    }
}
