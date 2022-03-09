<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class ScanDataCreateProjectShrinkRequest extends Model
{
    /**
     * @description 业务幂等编号
     *
     * @var string
     */
    public $bizOrderNo;

    /**
     * @description createScanUserDataRequest
     *
     * @var string
     */
    public $createScanUserDataRequestShrink;

    /**
     * @description 项目描述
     *
     * @var string
     */
    public $projectDesc;

    /**
     * @description 单个人下不允许出现相同项目名
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 目前只支持3VJIA
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'bizOrderNo'                      => 'BizOrderNo',
        'createScanUserDataRequestShrink' => 'CreateScanUserDataRequest',
        'projectDesc'                     => 'ProjectDesc',
        'projectName'                     => 'ProjectName',
        'source'                          => 'Source',
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
        if (null !== $this->createScanUserDataRequestShrink) {
            $res['CreateScanUserDataRequest'] = $this->createScanUserDataRequestShrink;
        }
        if (null !== $this->projectDesc) {
            $res['ProjectDesc'] = $this->projectDesc;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanDataCreateProjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['CreateScanUserDataRequest'])) {
            $model->createScanUserDataRequestShrink = $map['CreateScanUserDataRequest'];
        }
        if (isset($map['ProjectDesc'])) {
            $model->projectDesc = $map['ProjectDesc'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
