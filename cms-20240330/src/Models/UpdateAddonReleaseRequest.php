<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UpdateAddonReleaseRequest extends Model
{
    /**
     * @var string
     */
    public $addonVersion;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var EntityDiscoverRule
     */
    public $entityRules;

    /**
     * @var string
     */
    public $values;
    protected $_name = [
        'addonVersion' => 'addonVersion',
        'dryRun' => 'dryRun',
        'entityRules' => 'entityRules',
        'values' => 'values',
    ];

    public function validate()
    {
        if (null !== $this->entityRules) {
            $this->entityRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonVersion) {
            $res['addonVersion'] = $this->addonVersion;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->entityRules) {
            $res['entityRules'] = null !== $this->entityRules ? $this->entityRules->toArray($noStream) : $this->entityRules;
        }

        if (null !== $this->values) {
            $res['values'] = $this->values;
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
        if (isset($map['addonVersion'])) {
            $model->addonVersion = $map['addonVersion'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['entityRules'])) {
            $model->entityRules = EntityDiscoverRule::fromMap($map['entityRules']);
        }

        if (isset($map['values'])) {
            $model->values = $map['values'];
        }

        return $model;
    }
}
