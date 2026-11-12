<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\Hook\execution;

class Hook extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $event;

    /**
     * @var execution
     */
    public $execution;

    /**
     * @var string[]
     */
    public $match;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'description' => 'description',
        'enable' => 'enable',
        'event' => 'event',
        'execution' => 'execution',
        'match' => 'match',
        'name' => 'name',
        'schemaVersion' => 'schemaVersion',
        'scope' => 'scope',
    ];

    public function validate()
    {
        if (null !== $this->execution) {
            $this->execution->validate();
        }
        if (\is_array($this->match)) {
            Model::validateArray($this->match);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->execution) {
            $res['execution'] = null !== $this->execution ? $this->execution->toArray($noStream) : $this->execution;
        }

        if (null !== $this->match) {
            if (\is_array($this->match)) {
                $res['match'] = [];
                $n1 = 0;
                foreach ($this->match as $item1) {
                    $res['match'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        if (isset($map['execution'])) {
            $model->execution = execution::fromMap($map['execution']);
        }

        if (isset($map['match'])) {
            if (!empty($map['match'])) {
                $model->match = [];
                $n1 = 0;
                foreach ($map['match'] as $item1) {
                    $model->match[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
