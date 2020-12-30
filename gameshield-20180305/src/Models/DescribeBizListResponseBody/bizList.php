<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBizListResponseBody;

use AlibabaCloud\Tea\Model;

class bizList extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $nodeInUseNum;

    /**
     * @var string
     */
    public $ngGroupId;

    /**
     * @var int
     */
    public $useCc;

    /**
     * @var int
     */
    public $bizId;

    /**
     * @var int
     */
    public $groupNum;

    /**
     * @var int
     */
    public $nodeUnUseNum;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $esnBizId;

    /**
     * @var int
     */
    public $ccQps;
    protected $_name = [
        'type'         => 'Type',
        'nodeInUseNum' => 'NodeInUseNum',
        'ngGroupId'    => 'NgGroupId',
        'useCc'        => 'UseCc',
        'bizId'        => 'BizId',
        'groupNum'     => 'GroupNum',
        'nodeUnUseNum' => 'NodeUnUseNum',
        'appId'        => 'AppId',
        'bizName'      => 'BizName',
        'nodeNum'      => 'NodeNum',
        'esnBizId'     => 'EsnBizId',
        'ccQps'        => 'CcQps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->nodeInUseNum) {
            $res['NodeInUseNum'] = $this->nodeInUseNum;
        }
        if (null !== $this->ngGroupId) {
            $res['NgGroupId'] = $this->ngGroupId;
        }
        if (null !== $this->useCc) {
            $res['UseCc'] = $this->useCc;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->groupNum) {
            $res['GroupNum'] = $this->groupNum;
        }
        if (null !== $this->nodeUnUseNum) {
            $res['NodeUnUseNum'] = $this->nodeUnUseNum;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }
        if (null !== $this->ccQps) {
            $res['CcQps'] = $this->ccQps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['NodeInUseNum'])) {
            $model->nodeInUseNum = $map['NodeInUseNum'];
        }
        if (isset($map['NgGroupId'])) {
            $model->ngGroupId = $map['NgGroupId'];
        }
        if (isset($map['UseCc'])) {
            $model->useCc = $map['UseCc'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['GroupNum'])) {
            $model->groupNum = $map['GroupNum'];
        }
        if (isset($map['NodeUnUseNum'])) {
            $model->nodeUnUseNum = $map['NodeUnUseNum'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }
        if (isset($map['CcQps'])) {
            $model->ccQps = $map['CcQps'];
        }

        return $model;
    }
}
