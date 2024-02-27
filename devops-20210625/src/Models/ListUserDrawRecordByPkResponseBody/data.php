<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserDrawRecordByPkResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1401072305438324
     *
     * @var string
     */
    public $aliyunPk;

    /**
     * @example dsadsadsadas
     *
     * @var string
     */
    public $drawGroup;

    /**
     * @example dasdsadasdas
     *
     * @var string
     */
    public $drawPoolName;

    /**
     * @example 2
     *
     * @var string
     */
    public $drawResult;

    /**
     * @example 1545726028000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example null
     *
     * @var string
     */
    public $taskGroupId;

    /**
     * @example dsadsadasd
     *
     * @var string
     */
    public $uccId;
    protected $_name = [
        'aliyunPk'     => 'aliyunPk',
        'drawGroup'    => 'drawGroup',
        'drawPoolName' => 'drawPoolName',
        'drawResult'   => 'drawResult',
        'gmtCreate'    => 'gmtCreate',
        'taskGroupId'  => 'taskGroupId',
        'uccId'        => 'uccId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['aliyunPk'] = $this->aliyunPk;
        }
        if (null !== $this->drawGroup) {
            $res['drawGroup'] = $this->drawGroup;
        }
        if (null !== $this->drawPoolName) {
            $res['drawPoolName'] = $this->drawPoolName;
        }
        if (null !== $this->drawResult) {
            $res['drawResult'] = $this->drawResult;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->taskGroupId) {
            $res['taskGroupId'] = $this->taskGroupId;
        }
        if (null !== $this->uccId) {
            $res['uccId'] = $this->uccId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunPk'])) {
            $model->aliyunPk = $map['aliyunPk'];
        }
        if (isset($map['drawGroup'])) {
            $model->drawGroup = $map['drawGroup'];
        }
        if (isset($map['drawPoolName'])) {
            $model->drawPoolName = $map['drawPoolName'];
        }
        if (isset($map['drawResult'])) {
            $model->drawResult = $map['drawResult'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['taskGroupId'])) {
            $model->taskGroupId = $map['taskGroupId'];
        }
        if (isset($map['uccId'])) {
            $model->uccId = $map['uccId'];
        }

        return $model;
    }
}
