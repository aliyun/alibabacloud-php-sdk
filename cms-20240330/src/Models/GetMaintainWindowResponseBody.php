<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetMaintainWindowResponseBody extends Model
{
    /**
     * @var MaintainWindowForView
     */
    public $maintainWindow;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maintainWindow' => 'maintainWindow',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->maintainWindow) {
            $this->maintainWindow->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maintainWindow) {
            $res['maintainWindow'] = null !== $this->maintainWindow ? $this->maintainWindow->toArray($noStream) : $this->maintainWindow;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['maintainWindow'])) {
            $model->maintainWindow = MaintainWindowForView::fromMap($map['maintainWindow']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
