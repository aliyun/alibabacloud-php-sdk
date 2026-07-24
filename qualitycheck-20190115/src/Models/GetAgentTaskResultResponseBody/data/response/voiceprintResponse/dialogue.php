<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\voiceprintResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\voiceprintResponse\dialogue\additions;

class dialogue extends Model
{
    /**
     * @var additions
     */
    public $additions;

    /**
     * @var int
     */
    public $begin;

    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $words;
    protected $_name = [
        'additions' => 'Additions',
        'begin' => 'Begin',
        'end' => 'End',
        'words' => 'Words',
    ];

    public function validate()
    {
        if (null !== $this->additions) {
            $this->additions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additions) {
            $res['Additions'] = null !== $this->additions ? $this->additions->toArray($noStream) : $this->additions;
        }

        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->words) {
            $res['Words'] = $this->words;
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
        if (isset($map['Additions'])) {
            $model->additions = additions::fromMap($map['Additions']);
        }

        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['Words'])) {
            $model->words = $map['Words'];
        }

        return $model;
    }
}
