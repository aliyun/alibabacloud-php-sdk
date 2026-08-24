<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVulScanTasksResponseBody\tasks;

use AlibabaCloud\Dara\Model;

class customMatchGroup extends Model
{
    /**
     * @var string[]
     */
    public $group;

    /**
     * @var string
     */
    public $idpId;
    protected $_name = [
        'group' => 'Group',
        'idpId' => 'IdpId',
    ];

    public function validate()
    {
        if (\is_array($this->group)) {
            Model::validateArray($this->group);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->group) {
            if (\is_array($this->group)) {
                $res['Group'] = [];
                $n1 = 0;
                foreach ($this->group as $item1) {
                    $res['Group'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
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
        if (isset($map['Group'])) {
            if (!empty($map['Group'])) {
                $model->group = [];
                $n1 = 0;
                foreach ($map['Group'] as $item1) {
                    $model->group[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
        }

        return $model;
    }
}
