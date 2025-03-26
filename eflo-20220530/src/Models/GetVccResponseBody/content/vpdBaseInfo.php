<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content;

use AlibabaCloud\Dara\Model;

class vpdBaseInfo extends Model
{
    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $vpdId;

    /**
     * @var string
     */
    public $vpdName;
    protected $_name = [
        'cidr' => 'Cidr',
        'createTime' => 'CreateTime',
        'vpdId' => 'VpdId',
        'vpdName' => 'VpdName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
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
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }

        return $model;
    }
}
