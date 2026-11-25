<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorResponseBody\evaluator;

use AlibabaCloud\Dara\Model;

class skills extends Model
{
    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $skillName;
    protected $_name = [
        'currentVersion' => 'currentVersion',
        'description' => 'description',
        'displayName' => 'displayName',
        'enable' => 'enable',
        'skillName' => 'skillName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentVersion) {
            $res['currentVersion'] = $this->currentVersion;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
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
        if (isset($map['currentVersion'])) {
            $model->currentVersion = $map['currentVersion'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        return $model;
    }
}
