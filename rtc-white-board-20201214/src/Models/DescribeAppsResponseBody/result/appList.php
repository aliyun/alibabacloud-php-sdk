<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\DescribeAppsResponseBody\result;

use AlibabaCloud\Tea\Model;

class appList extends Model
{
    /**
     * @description 白板应用唯一标识符
     *
     * @var string
     */
    public $appID;

    /**
     * @description 白板应用名
     *
     * @var string
     */
    public $appName;

    /**
     * @description 白板应用状态（取值：1:启用，2:停用）
     *
     * @var int
     */
    public $status;

    /**
     * @description 白板应用回调地址URL
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description 合法域名列表，使用英文逗号(,)分隔
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description 白板应用创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 白板应用回调类型
     *
     * @var string
     */
    public $callbackType;
    protected $_name = [
        'appID'        => 'AppID',
        'appName'      => 'AppName',
        'status'       => 'Status',
        'callbackUrl'  => 'CallbackUrl',
        'domainNames'  => 'DomainNames',
        'createTime'   => 'CreateTime',
        'callbackType' => 'CallbackType',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->callbackType) {
            $res['CallbackType'] = $this->callbackType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appList
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CallbackType'])) {
            $model->callbackType = $map['CallbackType'];
        }

        return $model;
    }
}
