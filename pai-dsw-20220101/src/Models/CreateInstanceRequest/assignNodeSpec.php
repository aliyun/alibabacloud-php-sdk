<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest;

use AlibabaCloud\Dara\Model;

class assignNodeSpec extends Model
{
    /**
     * @var string
     */
    public $antiAffinityNodeNames;

    /**
     * @var string
     */
    public $nodeNames;
    protected $_name = [
        'antiAffinityNodeNames' => 'AntiAffinityNodeNames',
        'nodeNames' => 'NodeNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->antiAffinityNodeNames) {
            $res['AntiAffinityNodeNames'] = $this->antiAffinityNodeNames;
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
        if (isset($map['AntiAffinityNodeNames'])) {
            $model->antiAffinityNodeNames = $map['AntiAffinityNodeNames'];
        }

        if (isset($map['NodeNames'])) {
            $model->nodeNames = $map['NodeNames'];
        }

        return $model;
    }
}
