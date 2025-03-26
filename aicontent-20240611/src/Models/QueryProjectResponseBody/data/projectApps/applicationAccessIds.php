<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\QueryProjectResponseBody\data\projectApps;

use AlibabaCloud\Dara\Model;

class applicationAccessIds extends Model
{
    /**
     * @var string
     */
    public $applicationAccessId;

    /**
     * @var string
     */
    public $applicationAccessSecret;
    protected $_name = [
        'applicationAccessId' => 'applicationAccessId',
        'applicationAccessSecret' => 'applicationAccessSecret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationAccessId) {
            $res['applicationAccessId'] = $this->applicationAccessId;
        }

        if (null !== $this->applicationAccessSecret) {
            $res['applicationAccessSecret'] = $this->applicationAccessSecret;
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
        if (isset($map['applicationAccessId'])) {
            $model->applicationAccessId = $map['applicationAccessId'];
        }

        if (isset($map['applicationAccessSecret'])) {
            $model->applicationAccessSecret = $map['applicationAccessSecret'];
        }

        return $model;
    }
}
