<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ComponentLayout\nodeSelector;

class ComponentLayout extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var nodeSelector
     */
    public $nodeSelector;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'componentName' => 'ComponentName',
        'nodeSelector' => 'NodeSelector',
    ];

    public function validate()
    {
        if (null !== $this->nodeSelector) {
            $this->nodeSelector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->nodeSelector) {
            $res['NodeSelector'] = null !== $this->nodeSelector ? $this->nodeSelector->toArray($noStream) : $this->nodeSelector;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['NodeSelector'])) {
            $model->nodeSelector = nodeSelector::fromMap($map['NodeSelector']);
        }

        return $model;
    }
}
