<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result\newLive;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result\updateLive;

class result extends Model
{
    /**
     * @var newLive
     */
    public $newLive;

    /**
     * @var updateLive
     */
    public $updateLive;
    protected $_name = [
        'newLive' => 'NewLive',
        'updateLive' => 'UpdateLive',
    ];

    public function validate()
    {
        if (null !== $this->newLive) {
            $this->newLive->validate();
        }
        if (null !== $this->updateLive) {
            $this->updateLive->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newLive) {
            $res['NewLive'] = null !== $this->newLive ? $this->newLive->toArray($noStream) : $this->newLive;
        }

        if (null !== $this->updateLive) {
            $res['UpdateLive'] = null !== $this->updateLive ? $this->updateLive->toArray($noStream) : $this->updateLive;
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
        if (isset($map['NewLive'])) {
            $model->newLive = newLive::fromMap($map['NewLive']);
        }

        if (isset($map['UpdateLive'])) {
            $model->updateLive = updateLive::fromMap($map['UpdateLive']);
        }

        return $model;
    }
}
