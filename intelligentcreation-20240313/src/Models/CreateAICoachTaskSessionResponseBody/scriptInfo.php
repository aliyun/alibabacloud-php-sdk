<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAICoachTaskSessionResponseBody;

use AlibabaCloud\Dara\Model;

class scriptInfo extends Model
{
    /**
     * @var string
     */
    public $initiator;
    /**
     * @var int
     */
    public $maxDuration;
    /**
     * @var string
     */
    public $scriptDesc;
    /**
     * @var string
     */
    public $scriptName;
    protected $_name = [
        'initiator'   => 'initiator',
        'maxDuration' => 'maxDuration',
        'scriptDesc'  => 'scriptDesc',
        'scriptName'  => 'scriptName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->initiator) {
            $res['initiator'] = $this->initiator;
        }

        if (null !== $this->maxDuration) {
            $res['maxDuration'] = $this->maxDuration;
        }

        if (null !== $this->scriptDesc) {
            $res['scriptDesc'] = $this->scriptDesc;
        }

        if (null !== $this->scriptName) {
            $res['scriptName'] = $this->scriptName;
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
        if (isset($map['initiator'])) {
            $model->initiator = $map['initiator'];
        }

        if (isset($map['maxDuration'])) {
            $model->maxDuration = $map['maxDuration'];
        }

        if (isset($map['scriptDesc'])) {
            $model->scriptDesc = $map['scriptDesc'];
        }

        if (isset($map['scriptName'])) {
            $model->scriptName = $map['scriptName'];
        }

        return $model;
    }
}
