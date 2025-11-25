<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class GetExperimentVisualizationMetaRequest extends Model
{
    /**
     * @var string
     */
    public $nodeIds;
    protected $_name = [
        'nodeIds' => 'NodeIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
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
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }

        return $model;
    }
}
