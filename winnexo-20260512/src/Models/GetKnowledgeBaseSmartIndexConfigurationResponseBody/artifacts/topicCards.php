<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetKnowledgeBaseSmartIndexConfigurationResponseBody\artifacts;

use AlibabaCloud\Dara\Model;

class topicCards extends Model
{
    /**
     * @var string
     */
    public $directoryId;
    protected $_name = [
        'directoryId' => 'directoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
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
        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        return $model;
    }
}
