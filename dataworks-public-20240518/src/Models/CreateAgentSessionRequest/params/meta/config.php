<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentSessionRequest\params\meta;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentSessionRequest\params\meta\config\sessionTags;

class config extends Model
{
    /**
     * @var string
     */
    public $sessionSource;

    /**
     * @var sessionTags[]
     */
    public $sessionTags;
    protected $_name = [
        'sessionSource' => 'SessionSource',
        'sessionTags' => 'SessionTags',
    ];

    public function validate()
    {
        if (\is_array($this->sessionTags)) {
            Model::validateArray($this->sessionTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionSource) {
            $res['SessionSource'] = $this->sessionSource;
        }

        if (null !== $this->sessionTags) {
            if (\is_array($this->sessionTags)) {
                $res['SessionTags'] = [];
                $n1 = 0;
                foreach ($this->sessionTags as $item1) {
                    $res['SessionTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SessionSource'])) {
            $model->sessionSource = $map['SessionSource'];
        }

        if (isset($map['SessionTags'])) {
            if (!empty($map['SessionTags'])) {
                $model->sessionTags = [];
                $n1 = 0;
                foreach ($map['SessionTags'] as $item1) {
                    $model->sessionTags[$n1] = sessionTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
