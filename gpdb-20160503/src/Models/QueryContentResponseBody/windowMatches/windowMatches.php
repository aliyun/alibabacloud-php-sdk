<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches\windowMatch;

class windowMatches extends Model
{
    /**
     * @var windowMatch
     */
    public $windowMatch;
    protected $_name = [
        'windowMatch' => 'WindowMatch',
    ];

    public function validate()
    {
        if (null !== $this->windowMatch) {
            $this->windowMatch->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->windowMatch) {
            $res['WindowMatch'] = null !== $this->windowMatch ? $this->windowMatch->toArray($noStream) : $this->windowMatch;
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
        if (isset($map['WindowMatch'])) {
            $model->windowMatch = windowMatch::fromMap($map['WindowMatch']);
        }

        return $model;
    }
}
