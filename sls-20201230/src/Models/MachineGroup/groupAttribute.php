<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\MachineGroup;

use AlibabaCloud\Tea\Model;

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
        'groupTopic'   => 'groupTopic',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return groupAttribute
     */
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
