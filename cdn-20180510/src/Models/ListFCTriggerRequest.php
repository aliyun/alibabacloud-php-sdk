<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class ListFCTriggerRequest extends Model
{
    /**
     * @var string
     */
    public $eventMetaName;

    /**
     * @var string
     */
    public $eventMetaVersion;
    protected $_name = [
        'eventMetaName' => 'EventMetaName',
        'eventMetaVersion' => 'EventMetaVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventMetaName) {
            $res['EventMetaName'] = $this->eventMetaName;
        }

        if (null !== $this->eventMetaVersion) {
            $res['EventMetaVersion'] = $this->eventMetaVersion;
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
        if (isset($map['EventMetaName'])) {
            $model->eventMetaName = $map['EventMetaName'];
        }

        if (isset($map['EventMetaVersion'])) {
            $model->eventMetaVersion = $map['EventMetaVersion'];
        }

        return $model;
    }
}
