<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\OfflineSkillRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $skillVersion;
    protected $_name = [
        'scope' => 'scope',
        'skillVersion' => 'skillVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->skillVersion) {
            $res['skillVersion'] = $this->skillVersion;
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
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['skillVersion'])) {
            $model->skillVersion = $map['skillVersion'];
        }

        return $model;
    }
}
