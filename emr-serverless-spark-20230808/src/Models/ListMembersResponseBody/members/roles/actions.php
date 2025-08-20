<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListMembersResponseBody\members\roles;

use AlibabaCloud\Dara\Model;

class actions extends Model
{
    /**
     * @var string
     */
    public $actionArn;

    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string[]
     */
    public $dependencies;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'actionArn' => 'actionArn',
        'actionName' => 'actionName',
        'dependencies' => 'dependencies',
        'description' => 'description',
        'displayName' => 'displayName',
    ];

    public function validate()
    {
        if (\is_array($this->dependencies)) {
            Model::validateArray($this->dependencies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionArn) {
            $res['actionArn'] = $this->actionArn;
        }

        if (null !== $this->actionName) {
            $res['actionName'] = $this->actionName;
        }

        if (null !== $this->dependencies) {
            if (\is_array($this->dependencies)) {
                $res['dependencies'] = [];
                $n1 = 0;
                foreach ($this->dependencies as $item1) {
                    $res['dependencies'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
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
        if (isset($map['actionArn'])) {
            $model->actionArn = $map['actionArn'];
        }

        if (isset($map['actionName'])) {
            $model->actionName = $map['actionName'];
        }

        if (isset($map['dependencies'])) {
            if (!empty($map['dependencies'])) {
                $model->dependencies = [];
                $n1 = 0;
                foreach ($map['dependencies'] as $item1) {
                    $model->dependencies[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        return $model;
    }
}
