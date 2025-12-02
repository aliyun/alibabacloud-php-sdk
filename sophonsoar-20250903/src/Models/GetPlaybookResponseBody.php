<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\GetPlaybookResponseBody\playbook;

class GetPlaybookResponseBody extends Model
{
    /**
     * @var playbook
     */
    public $playbook;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbook' => 'Playbook',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->playbook) {
            $this->playbook->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playbook) {
            $res['Playbook'] = null !== $this->playbook ? $this->playbook->toArray($noStream) : $this->playbook;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Playbook'])) {
            $model->playbook = playbook::fromMap($map['Playbook']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
