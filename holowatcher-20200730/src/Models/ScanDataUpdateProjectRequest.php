<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class ScanDataUpdateProjectRequest extends Model
{
    /**
     * @description 业务幂等ID，用于防止重复请求，写操作必传
     *
     * @var string
     */
    public $bizOrderNo;

    /**
     * @description 更新的项目描述信息
     *
     * @var string
     */
    public $projectDesc;

    /**
     * @description 项目ID
     *
     * @var int
     */
    public $projectId;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 对应数据源，目前仅支持广州三维家，需要新增源需要和接口负责人沟通并添加
     *
     * @var string
     */
    public $source;

    /**
     * @description 用户手机号码
     *
     * @var string
     */
    public $userMobNum;

    /**
     * @description 用户昵称
     *
     * @var string
     */
    public $userNick;

    /**
     * @description 用户会员类型，目前只支持TB淘宝
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'bizOrderNo'  => 'BizOrderNo',
        'projectDesc' => 'ProjectDesc',
        'projectId'   => 'ProjectId',
        'projectName' => 'ProjectName',
        'source'      => 'Source',
        'userMobNum'  => 'UserMobNum',
        'userNick'    => 'UserNick',
        'userType'    => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
        }
        if (null !== $this->projectDesc) {
            $res['ProjectDesc'] = $this->projectDesc;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->userMobNum) {
            $res['UserMobNum'] = $this->userMobNum;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanDataUpdateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['ProjectDesc'])) {
            $model->projectDesc = $map['ProjectDesc'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UserMobNum'])) {
            $model->userMobNum = $map['UserMobNum'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
