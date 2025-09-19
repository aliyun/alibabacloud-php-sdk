<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody\suspEvents;

use AlibabaCloud\Dara\Model;

class tacticItems extends Model
{
    /**
     * @var string
     */
    public $tacticDisplayName;

    /**
     * @var string
     */
    public $tacticId;
    protected $_name = [
        'tacticDisplayName' => 'TacticDisplayName',
        'tacticId' => 'TacticId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tacticDisplayName) {
            $res['TacticDisplayName'] = $this->tacticDisplayName;
        }

        if (null !== $this->tacticId) {
            $res['TacticId'] = $this->tacticId;
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
        if (isset($map['TacticDisplayName'])) {
            $model->tacticDisplayName = $map['TacticDisplayName'];
        }

        if (isset($map['TacticId'])) {
            $model->tacticId = $map['TacticId'];
        }

        return $model;
    }
}
