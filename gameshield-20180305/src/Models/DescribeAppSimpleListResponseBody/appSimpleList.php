<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppSimpleListResponseBody;

use AlibabaCloud\Tea\Model;

class appSimpleList extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $ngAppId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $esnAppId;
    protected $_name = [
        'appName'  => 'AppName',
        'ngAppId'  => 'NgAppId',
        'appId'    => 'AppId',
        'esnAppId' => 'EsnAppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->ngAppId) {
            $res['NgAppId'] = $this->ngAppId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->esnAppId) {
            $res['EsnAppId'] = $this->esnAppId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appSimpleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['NgAppId'])) {
            $model->ngAppId = $map['NgAppId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EsnAppId'])) {
            $model->esnAppId = $map['EsnAppId'];
        }

        return $model;
    }
}
