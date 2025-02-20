<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListUserDrawRecordByPkRequest extends Model
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
    protected $_name = [
        'aliyunPk'     => 'aliyunPk',
        'drawGroup'    => 'drawGroup',
        'drawPoolName' => 'drawPoolName',
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

        return $model;
    }
}
