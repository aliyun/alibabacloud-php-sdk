<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionResponseBody;

use AlibabaCloud\Dara\Model;

class abnInstances extends Model
{
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'nodeId'   => 'NodeId',
        'nodeName' => 'NodeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
