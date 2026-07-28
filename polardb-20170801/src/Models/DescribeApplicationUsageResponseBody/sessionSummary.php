<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationUsageResponseBody;

use AlibabaCloud\Dara\Model;

class sessionSummary extends Model
{
    /**
     * @var int
     */
    public $activeSessions;

    /**
     * @var int
     */
    public $storedSessions;
    protected $_name = [
        'activeSessions' => 'ActiveSessions',
        'storedSessions' => 'StoredSessions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeSessions) {
            $res['ActiveSessions'] = $this->activeSessions;
        }

        if (null !== $this->storedSessions) {
            $res['StoredSessions'] = $this->storedSessions;
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
        if (isset($map['ActiveSessions'])) {
            $model->activeSessions = $map['ActiveSessions'];
        }

        if (isset($map['StoredSessions'])) {
            $model->storedSessions = $map['StoredSessions'];
        }

        return $model;
    }
}
