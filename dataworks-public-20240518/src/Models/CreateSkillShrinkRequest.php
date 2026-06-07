<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateSkillShrinkRequest extends Model
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
     * @var string
     */
    public $extraShrink;

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
     * @var string
     */
    public $visibilityScopeShrink;
    protected $_name = [
        'bundleUrl' => 'BundleUrl',
        'description' => 'Description',
        'extraShrink' => 'Extra',
        'name' => 'Name',
        'skillMdOverride' => 'SkillMdOverride',
        'versionNote' => 'VersionNote',
        'visibility' => 'Visibility',
        'visibilityScopeShrink' => 'VisibilityScope',
    ];

    public function validate()
    {
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

        if (null !== $this->extraShrink) {
            $res['Extra'] = $this->extraShrink;
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

        if (null !== $this->visibilityScopeShrink) {
            $res['VisibilityScope'] = $this->visibilityScopeShrink;
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
            $model->extraShrink = $map['Extra'];
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
            $model->visibilityScopeShrink = $map['VisibilityScope'];
        }

        return $model;
    }
}
