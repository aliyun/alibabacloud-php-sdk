<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkResponseBody;

use AlibabaCloud\Tea\Model;

class actionList extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $configList;

    /**
     * @var string
     */
    public $dingTalkLang;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $groupIdList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $intervalTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'actionName'   => 'ActionName',
        'aliUid'       => 'AliUid',
        'configList'   => 'ConfigList',
        'dingTalkLang' => 'DingTalkLang',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'groupIdList'  => 'GroupIdList',
        'id'           => 'Id',
        'intervalTime' => 'IntervalTime',
        'status'       => 'Status',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = $this->configList;
        }
        if (null !== $this->dingTalkLang) {
            $res['DingTalkLang'] = $this->dingTalkLang;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->intervalTime) {
            $res['IntervalTime'] = $this->intervalTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ConfigList'])) {
            $model->configList = $map['ConfigList'];
        }
        if (isset($map['DingTalkLang'])) {
            $model->dingTalkLang = $map['DingTalkLang'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupIdList'])) {
            $model->groupIdList = $map['GroupIdList'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IntervalTime'])) {
            $model->intervalTime = $map['IntervalTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
