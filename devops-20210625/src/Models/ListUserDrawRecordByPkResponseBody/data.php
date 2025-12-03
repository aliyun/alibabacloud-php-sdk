<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserDrawRecordByPkResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aliyunPk;

    /**
     * @var string
     */
    public $drawGroup;

    /**
     * @var string
     */
    public $drawPoolName;

    /**
     * @var string
     */
    public $drawResult;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $taskGroupId;

    /**
     * @var string
     */
    public $uccId;
    protected $_name = [
        'aliyunPk' => 'aliyunPk',
        'drawGroup' => 'drawGroup',
        'drawPoolName' => 'drawPoolName',
        'drawResult' => 'drawResult',
        'gmtCreate' => 'gmtCreate',
        'taskGroupId' => 'taskGroupId',
        'uccId' => 'uccId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
