<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateSkillRequest\visibilityScope;

class CreateSkillRequest extends Model
{
    /**
     * @var string
     */
    public $bundleUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skillMdOverride;

    /**
     * @var string
     */
    public $versionNote;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var visibilityScope
     */
    public $visibilityScope;
    protected $_name = [
        'bundleUrl' => 'BundleUrl',
        'description' => 'Description',
        'extra' => 'Extra',
        'name' => 'Name',
        'skillMdOverride' => 'SkillMdOverride',
        'versionNote' => 'VersionNote',
        'visibility' => 'Visibility',
        'visibilityScope' => 'VisibilityScope',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (null !== $this->visibilityScope) {
            $this->visibilityScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bundleUrl) {
            $res['BundleUrl'] = $this->bundleUrl;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skillMdOverride) {
            $res['SkillMdOverride'] = $this->skillMdOverride;
        }

        if (null !== $this->versionNote) {
            $res['VersionNote'] = $this->versionNote;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        if (null !== $this->visibilityScope) {
            $res['VisibilityScope'] = null !== $this->visibilityScope ? $this->visibilityScope->toArray($noStream) : $this->visibilityScope;
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
        if (isset($map['BundleUrl'])) {
            $model->bundleUrl = $map['BundleUrl'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Extra'])) {
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SkillMdOverride'])) {
            $model->skillMdOverride = $map['SkillMdOverride'];
        }

        if (isset($map['VersionNote'])) {
            $model->versionNote = $map['VersionNote'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        if (isset($map['VisibilityScope'])) {
            $model->visibilityScope = visibilityScope::fromMap($map['VisibilityScope']);
        }

        return $model;
    }
}
