<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssAgent\V20260622\Models\GetSessionContentResponseBody\content;

use AlibabaCloud\Dara\Model;

class agentContents extends Model
{
    /**
     * @var string
     */
    public $agentContent;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'agentContent' => 'agentContent',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentContent) {
            $res['agentContent'] = $this->agentContent;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['agentContent'])) {
            $model->agentContent = $map['agentContent'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
