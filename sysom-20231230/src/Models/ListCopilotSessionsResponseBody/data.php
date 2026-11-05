<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionsResponseBody\data\sessions;

class data extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var sessions[]
     */
    public $sessions;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'sessions' => 'sessions',
    ];

    public function validate()
    {
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['sessions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['sessions'])) {
            if (!empty($map['sessions'])) {
                $model->sessions = [];
                $n1 = 0;
                foreach ($map['sessions'] as $item1) {
                    $model->sessions[$n1] = sessions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
