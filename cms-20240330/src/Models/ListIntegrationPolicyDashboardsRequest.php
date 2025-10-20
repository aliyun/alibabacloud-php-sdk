<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListIntegrationPolicyDashboardsRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'addonName' => 'addonName',
        'language' => 'language',
        'scene' => 'scene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['addonName'] = $this->addonName;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
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
        if (isset($map['addonName'])) {
            $model->addonName = $map['addonName'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        return $model;
    }
}
