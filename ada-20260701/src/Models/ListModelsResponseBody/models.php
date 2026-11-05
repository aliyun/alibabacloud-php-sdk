<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models\ListModelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListModelsResponseBody\models\capabilities;

class models extends Model
{
    /**
     * @var capabilities
     */
    public $capabilities;

    /**
     * @var int
     */
    public $contextWindow;

    /**
     * @var int
     */
    public $created;

    /**
     * @var string
     */
    public $creditsCoefficient;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $maxContextWindow;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $ownedBy;

    /**
     * @var int
     */
    public $supportsThinking;

    /**
     * @var string
     */
    public $thinkingLevel;

    /**
     * @var string[]
     */
    public $thinkingLevels;

    /**
     * @var int
     */
    public $thinkingMode;
    protected $_name = [
        'capabilities' => 'Capabilities',
        'contextWindow' => 'ContextWindow',
        'created' => 'Created',
        'creditsCoefficient' => 'CreditsCoefficient',
        'displayName' => 'DisplayName',
        'id' => 'Id',
        'maxContextWindow' => 'MaxContextWindow',
        'object' => 'Object',
        'ownedBy' => 'OwnedBy',
        'supportsThinking' => 'SupportsThinking',
        'thinkingLevel' => 'ThinkingLevel',
        'thinkingLevels' => 'ThinkingLevels',
        'thinkingMode' => 'ThinkingMode',
    ];

    public function validate()
    {
        if (null !== $this->capabilities) {
            $this->capabilities->validate();
        }
        if (\is_array($this->thinkingLevels)) {
            Model::validateArray($this->thinkingLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilities) {
            $res['Capabilities'] = null !== $this->capabilities ? $this->capabilities->toArray($noStream) : $this->capabilities;
        }

        if (null !== $this->contextWindow) {
            $res['ContextWindow'] = $this->contextWindow;
        }

        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }

        if (null !== $this->creditsCoefficient) {
            $res['CreditsCoefficient'] = $this->creditsCoefficient;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->maxContextWindow) {
            $res['MaxContextWindow'] = $this->maxContextWindow;
        }

        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }

        if (null !== $this->ownedBy) {
            $res['OwnedBy'] = $this->ownedBy;
        }

        if (null !== $this->supportsThinking) {
            $res['SupportsThinking'] = $this->supportsThinking;
        }

        if (null !== $this->thinkingLevel) {
            $res['ThinkingLevel'] = $this->thinkingLevel;
        }

        if (null !== $this->thinkingLevels) {
            if (\is_array($this->thinkingLevels)) {
                $res['ThinkingLevels'] = [];
                $n1 = 0;
                foreach ($this->thinkingLevels as $item1) {
                    $res['ThinkingLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thinkingMode) {
            $res['ThinkingMode'] = $this->thinkingMode;
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
        if (isset($map['Capabilities'])) {
            $model->capabilities = capabilities::fromMap($map['Capabilities']);
        }

        if (isset($map['ContextWindow'])) {
            $model->contextWindow = $map['ContextWindow'];
        }

        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }

        if (isset($map['CreditsCoefficient'])) {
            $model->creditsCoefficient = $map['CreditsCoefficient'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MaxContextWindow'])) {
            $model->maxContextWindow = $map['MaxContextWindow'];
        }

        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }

        if (isset($map['OwnedBy'])) {
            $model->ownedBy = $map['OwnedBy'];
        }

        if (isset($map['SupportsThinking'])) {
            $model->supportsThinking = $map['SupportsThinking'];
        }

        if (isset($map['ThinkingLevel'])) {
            $model->thinkingLevel = $map['ThinkingLevel'];
        }

        if (isset($map['ThinkingLevels'])) {
            if (!empty($map['ThinkingLevels'])) {
                $model->thinkingLevels = [];
                $n1 = 0;
                foreach ($map['ThinkingLevels'] as $item1) {
                    $model->thinkingLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ThinkingMode'])) {
            $model->thinkingMode = $map['ThinkingMode'];
        }

        return $model;
    }
}
