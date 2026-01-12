<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class HyperNodeSpec extends Model
{
    /**
     * @var string
     */
    public $hyperNodeName;

    /**
     * @var string
     */
    public $nodeNames;
    protected $_name = [
        'hyperNodeName' => 'HyperNodeName',
        'nodeNames' => 'NodeNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hyperNodeName) {
            $res['HyperNodeName'] = $this->hyperNodeName;
        }

        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
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
        if (isset($map['HyperNodeName'])) {
            $model->hyperNodeName = $map['HyperNodeName'];
        }

        if (isset($map['NodeNames'])) {
            $model->nodeNames = $map['NodeNames'];
        }

        return $model;
    }
}
