<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class DeleteClientsRequest extends Model
{
    /**
     * @var string
     */
    public $callerAliUid;

    /**
     * @var bool
     */
    public $inManage;

    /**
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'callerAliUid' => 'CallerAliUid',
        'inManage' => 'InManage',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
        if (\is_array($this->uuids)) {
            Model::validateArray($this->uuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callerAliUid) {
            $res['CallerAliUid'] = $this->callerAliUid;
        }

        if (null !== $this->inManage) {
            $res['InManage'] = $this->inManage;
        }

        if (null !== $this->uuids) {
            if (\is_array($this->uuids)) {
                $res['Uuids'] = [];
                $n1 = 0;
                foreach ($this->uuids as $item1) {
                    $res['Uuids'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CallerAliUid'])) {
            $model->callerAliUid = $map['CallerAliUid'];
        }

        if (isset($map['InManage'])) {
            $model->inManage = $map['InManage'];
        }

        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = [];
                $n1 = 0;
                foreach ($map['Uuids'] as $item1) {
                    $model->uuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
