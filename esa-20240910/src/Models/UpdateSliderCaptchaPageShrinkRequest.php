<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateSliderCaptchaPageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configsShrink;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var string
     */
    public $forceLanguage;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $siteIdsShrink;
    protected $_name = [
        'configsShrink' => 'Configs',
        'customContent' => 'CustomContent',
        'forceLanguage' => 'ForceLanguage',
        'id' => 'Id',
        'name' => 'Name',
        'siteIdsShrink' => 'SiteIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configsShrink) {
            $res['Configs'] = $this->configsShrink;
        }

        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }

        if (null !== $this->forceLanguage) {
            $res['ForceLanguage'] = $this->forceLanguage;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->siteIdsShrink) {
            $res['SiteIds'] = $this->siteIdsShrink;
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
        if (isset($map['Configs'])) {
            $model->configsShrink = $map['Configs'];
        }

        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }

        if (isset($map['ForceLanguage'])) {
            $model->forceLanguage = $map['ForceLanguage'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SiteIds'])) {
            $model->siteIdsShrink = $map['SiteIds'];
        }

        return $model;
    }
}
