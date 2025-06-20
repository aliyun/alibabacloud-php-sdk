<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckShrinkRequest\blockInfos;

use AlibabaCloud\Dara\Model;

class hitInfos extends Model
{
    /**
     * @var string
     */
    public $hitInfo;

    /**
     * @var string
     */
    public $hitObject;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'hitInfo' => 'HitInfo',
        'hitObject' => 'HitObject',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitInfo) {
            $res['HitInfo'] = $this->hitInfo;
        }

        if (null !== $this->hitObject) {
            $res['HitObject'] = $this->hitObject;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['HitInfo'])) {
            $model->hitInfo = $map['HitInfo'];
        }

        if (isset($map['HitObject'])) {
            $model->hitObject = $map['HitObject'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
