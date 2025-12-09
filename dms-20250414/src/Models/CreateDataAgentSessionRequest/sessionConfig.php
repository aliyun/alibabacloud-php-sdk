<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataAgentSessionRequest;

use AlibabaCloud\Dara\Model;

class sessionConfig extends Model
{
    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var string
     */
    public $customAgentStage;

    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'customAgentId' => 'CustomAgentId',
        'customAgentStage' => 'CustomAgentStage',
        'enableSearch' => 'EnableSearch',
        'language' => 'Language',
        'mode' => 'Mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->customAgentStage) {
            $res['CustomAgentStage'] = $this->customAgentStage;
        }

        if (null !== $this->enableSearch) {
            $res['EnableSearch'] = $this->enableSearch;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['CustomAgentStage'])) {
            $model->customAgentStage = $map['CustomAgentStage'];
        }

        if (isset($map['EnableSearch'])) {
            $model->enableSearch = $map['EnableSearch'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
