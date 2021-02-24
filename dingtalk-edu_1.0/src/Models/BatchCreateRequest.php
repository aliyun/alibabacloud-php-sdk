<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest\data;
use AlibabaCloud\Tea\Model;

class BatchCreateRequest extends Model
{
    /**
     * @description 卡片业务类型，打卡写死：industry_center
     *
     * @var string
     */
    public $cardBizCode;

    /**
     * @description 卡片详细数据
     *
     * @var data
     */
    public $data;

    /**
     * @description 卡片幂等唯一键
     *
     * @var string
     */
    public $identifier;

    /**
     * @description isv业务类型
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description 老师用户id
     *
     * @var string
     */
    public $userid;

    /**
     * @description 老师corpId
     *
     * @var string
     */
    public $dingCorpId;

    /**
     * @description 小程序版本号
     *
     * @var int
     */
    public $jsVersion;
    protected $_name = [
        'cardBizCode' => 'cardBizCode',
        'data'        => 'data',
        'identifier'  => 'identifier',
        'sourceType'  => 'sourceType',
        'userid'      => 'userid',
        'dingCorpId'  => 'dingCorpId',
        'jsVersion'   => 'jsVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardBizCode) {
            $res['cardBizCode'] = $this->cardBizCode;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->dingCorpId) {
            $res['dingCorpId'] = $this->dingCorpId;
        }
        if (null !== $this->jsVersion) {
            $res['jsVersion'] = $this->jsVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cardBizCode'])) {
            $model->cardBizCode = $map['cardBizCode'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['userid'])) {
            $model->userid = $map['userid'];
        }
        if (isset($map['dingCorpId'])) {
            $model->dingCorpId = $map['dingCorpId'];
        }
        if (isset($map['jsVersion'])) {
            $model->jsVersion = $map['jsVersion'];
        }

        return $model;
    }
}
