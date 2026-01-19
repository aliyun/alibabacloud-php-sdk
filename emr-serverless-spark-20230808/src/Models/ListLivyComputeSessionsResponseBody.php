<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeSessionsResponseBody\sessions;

class ListLivyComputeSessionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'requestId',
        'sessions' => 'sessions',
        'totalCount' => 'totalCount',
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
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
