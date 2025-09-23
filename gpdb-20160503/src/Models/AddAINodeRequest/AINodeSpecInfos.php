<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\AddAINodeRequest;

use AlibabaCloud\Dara\Model;

class AINodeSpecInfos extends Model
{
    /**
     * @var string
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $nodeSpec;
    protected $_name = [
        'nodeNum' => 'NodeNum',
        'nodeSpec' => 'NodeSpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }

        if (null !== $this->nodeSpec) {
            $res['NodeSpec'] = $this->nodeSpec;
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
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        if (isset($map['NodeSpec'])) {
            $model->nodeSpec = $map['NodeSpec'];
        }

        return $model;
    }
}
