<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest\excludeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest\exportToModule;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest\includeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest\variables;
use AlibabaCloud\Tea\Model;

class UpdateResourceExportTaskAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var excludeRules[]
     */
    public $excludeRules;

    /**
     * @var exportToModule
     */
    public $exportToModule;

    /**
     * @var includeRules[]
     */
    public $includeRules;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var string
     */
    public $triggerStrategy;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'clientToken'      => 'clientToken',
        'description'      => 'description',
        'excludeRules'     => 'excludeRules',
        'exportToModule'   => 'exportToModule',
        'includeRules'     => 'includeRules',
        'name'             => 'name',
        'ramRole'          => 'ramRole',
        'terraformVersion' => 'terraformVersion',
        'triggerStrategy'  => 'triggerStrategy',
        'variables'        => 'variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->excludeRules) {
            $res['excludeRules'] = [];
            if (null !== $this->excludeRules && \is_array($this->excludeRules)) {
                $n = 0;
                foreach ($this->excludeRules as $item) {
                    $res['excludeRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->exportToModule) {
            $res['exportToModule'] = null !== $this->exportToModule ? $this->exportToModule->toMap() : null;
        }
        if (null !== $this->includeRules) {
            $res['includeRules'] = [];
            if (null !== $this->includeRules && \is_array($this->includeRules)) {
                $n = 0;
                foreach ($this->includeRules as $item) {
                    $res['includeRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }
        if (null !== $this->terraformVersion) {
            $res['terraformVersion'] = $this->terraformVersion;
        }
        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }
        if (null !== $this->variables) {
            $res['variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceExportTaskAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['excludeRules'])) {
            if (!empty($map['excludeRules'])) {
                $model->excludeRules = [];
                $n                   = 0;
                foreach ($map['excludeRules'] as $item) {
                    $model->excludeRules[$n++] = null !== $item ? excludeRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['exportToModule'])) {
            $model->exportToModule = exportToModule::fromMap($map['exportToModule']);
        }
        if (isset($map['includeRules'])) {
            if (!empty($map['includeRules'])) {
                $model->includeRules = [];
                $n                   = 0;
                foreach ($map['includeRules'] as $item) {
                    $model->includeRules[$n++] = null !== $item ? includeRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }
        if (isset($map['terraformVersion'])) {
            $model->terraformVersion = $map['terraformVersion'];
        }
        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }
        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
