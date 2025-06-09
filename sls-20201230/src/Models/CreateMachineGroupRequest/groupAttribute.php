<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CreateMachineGroupRequest;

use AlibabaCloud\Dara\Model;

class groupAttribute extends Model
{
    /**
     * @var string
     */
    public $externalName;

    /**
     * @var string
     */
    public $groupTopic;
    protected $_name = [
        'externalName' => 'externalName',
        'groupTopic' => 'groupTopic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalName) {
            $res['externalName'] = $this->externalName;
        }

        if (null !== $this->groupTopic) {
            $res['groupTopic'] = $this->groupTopic;
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
        if (isset($map['externalName'])) {
            $model->externalName = $map['externalName'];
        }

        if (isset($map['groupTopic'])) {
            $model->groupTopic = $map['groupTopic'];
        }

        return $model;
    }
}
