<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\a2uiMessages;

use AlibabaCloud\Dara\Model;

class deleteSurface extends Model
{
    /**
     * @var string
     */
    public $surfaceId;
    protected $_name = [
        'surfaceId' => 'surfaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->surfaceId) {
            $res['surfaceId'] = $this->surfaceId;
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
        if (isset($map['surfaceId'])) {
            $model->surfaceId = $map['surfaceId'];
        }

        return $model;
    }
}
