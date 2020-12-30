<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class CreateBizRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
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
    public $bizName;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var int
     */
    public $useCc;

    /**
     * @var int
     */
    public $ccQps;

    /**
     * @var string
     */
    public $l4Rules;

    /**
     * @var string
     */
    public $groups;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'lang'     => 'Lang',
        'appId'    => 'AppId',
        'appName'  => 'AppName',
        'bizName'  => 'BizName',
        'bizType'  => 'BizType',
        'useCc'    => 'UseCc',
        'ccQps'    => 'CcQps',
        'l4Rules'  => 'L4Rules',
        'groups'   => 'Groups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->useCc) {
            $res['UseCc'] = $this->useCc;
        }
        if (null !== $this->ccQps) {
            $res['CcQps'] = $this->ccQps;
        }
        if (null !== $this->l4Rules) {
            $res['L4Rules'] = $this->l4Rules;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBizRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['UseCc'])) {
            $model->useCc = $map['UseCc'];
        }
        if (isset($map['CcQps'])) {
            $model->ccQps = $map['CcQps'];
        }
        if (isset($map['L4Rules'])) {
            $model->l4Rules = $map['L4Rules'];
        }
        if (isset($map['Groups'])) {
            $model->groups = $map['Groups'];
        }

        return $model;
    }
}
