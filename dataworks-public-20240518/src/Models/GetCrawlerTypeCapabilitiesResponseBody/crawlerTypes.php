<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCrawlerTypeCapabilitiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCrawlerTypeCapabilitiesResponseBody\crawlerTypes\supportedEntityTypes;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCrawlerTypeCapabilitiesResponseBody\crawlerTypes\supportedOptionKeys;

class crawlerTypes extends Model
{
    /**
     * @var string
     */
    public $defaultScopeUnit;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $requireResourceGroup;

    /**
     * @var bool
     */
    public $supportAiComment;

    /**
     * @var bool
     */
    public $supportExcludeRegex;

    /**
     * @var bool
     */
    public $supportSchedule;

    /**
     * @var string[]
     */
    public $supportedDatasourceTypes;

    /**
     * @var supportedEntityTypes[]
     */
    public $supportedEntityTypes;

    /**
     * @var supportedOptionKeys[]
     */
    public $supportedOptionKeys;

    /**
     * @var string[]
     */
    public $supportedScopeUnits;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'defaultScopeUnit' => 'DefaultScopeUnit',
        'displayName' => 'DisplayName',
        'requireResourceGroup' => 'RequireResourceGroup',
        'supportAiComment' => 'SupportAiComment',
        'supportExcludeRegex' => 'SupportExcludeRegex',
        'supportSchedule' => 'SupportSchedule',
        'supportedDatasourceTypes' => 'SupportedDatasourceTypes',
        'supportedEntityTypes' => 'SupportedEntityTypes',
        'supportedOptionKeys' => 'SupportedOptionKeys',
        'supportedScopeUnits' => 'SupportedScopeUnits',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->supportedDatasourceTypes)) {
            Model::validateArray($this->supportedDatasourceTypes);
        }
        if (\is_array($this->supportedEntityTypes)) {
            Model::validateArray($this->supportedEntityTypes);
        }
        if (\is_array($this->supportedOptionKeys)) {
            Model::validateArray($this->supportedOptionKeys);
        }
        if (\is_array($this->supportedScopeUnits)) {
            Model::validateArray($this->supportedScopeUnits);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultScopeUnit) {
            $res['DefaultScopeUnit'] = $this->defaultScopeUnit;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->requireResourceGroup) {
            $res['RequireResourceGroup'] = $this->requireResourceGroup;
        }

        if (null !== $this->supportAiComment) {
            $res['SupportAiComment'] = $this->supportAiComment;
        }

        if (null !== $this->supportExcludeRegex) {
            $res['SupportExcludeRegex'] = $this->supportExcludeRegex;
        }

        if (null !== $this->supportSchedule) {
            $res['SupportSchedule'] = $this->supportSchedule;
        }

        if (null !== $this->supportedDatasourceTypes) {
            if (\is_array($this->supportedDatasourceTypes)) {
                $res['SupportedDatasourceTypes'] = [];
                $n1 = 0;
                foreach ($this->supportedDatasourceTypes as $item1) {
                    $res['SupportedDatasourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportedEntityTypes) {
            if (\is_array($this->supportedEntityTypes)) {
                $res['SupportedEntityTypes'] = [];
                $n1 = 0;
                foreach ($this->supportedEntityTypes as $item1) {
                    $res['SupportedEntityTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportedOptionKeys) {
            if (\is_array($this->supportedOptionKeys)) {
                $res['SupportedOptionKeys'] = [];
                $n1 = 0;
                foreach ($this->supportedOptionKeys as $item1) {
                    $res['SupportedOptionKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportedScopeUnits) {
            if (\is_array($this->supportedScopeUnits)) {
                $res['SupportedScopeUnits'] = [];
                $n1 = 0;
                foreach ($this->supportedScopeUnits as $item1) {
                    $res['SupportedScopeUnits'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DefaultScopeUnit'])) {
            $model->defaultScopeUnit = $map['DefaultScopeUnit'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['RequireResourceGroup'])) {
            $model->requireResourceGroup = $map['RequireResourceGroup'];
        }

        if (isset($map['SupportAiComment'])) {
            $model->supportAiComment = $map['SupportAiComment'];
        }

        if (isset($map['SupportExcludeRegex'])) {
            $model->supportExcludeRegex = $map['SupportExcludeRegex'];
        }

        if (isset($map['SupportSchedule'])) {
            $model->supportSchedule = $map['SupportSchedule'];
        }

        if (isset($map['SupportedDatasourceTypes'])) {
            if (!empty($map['SupportedDatasourceTypes'])) {
                $model->supportedDatasourceTypes = [];
                $n1 = 0;
                foreach ($map['SupportedDatasourceTypes'] as $item1) {
                    $model->supportedDatasourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportedEntityTypes'])) {
            if (!empty($map['SupportedEntityTypes'])) {
                $model->supportedEntityTypes = [];
                $n1 = 0;
                foreach ($map['SupportedEntityTypes'] as $item1) {
                    $model->supportedEntityTypes[$n1] = supportedEntityTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportedOptionKeys'])) {
            if (!empty($map['SupportedOptionKeys'])) {
                $model->supportedOptionKeys = [];
                $n1 = 0;
                foreach ($map['SupportedOptionKeys'] as $item1) {
                    $model->supportedOptionKeys[$n1] = supportedOptionKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportedScopeUnits'])) {
            if (!empty($map['SupportedScopeUnits'])) {
                $model->supportedScopeUnits = [];
                $n1 = 0;
                foreach ($map['SupportedScopeUnits'] as $item1) {
                    $model->supportedScopeUnits[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
