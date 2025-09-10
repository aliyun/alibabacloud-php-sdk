<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteAddonReleaseRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $releaseName;
    protected $_name = [
        'addonName' => 'addonName',
        'force' => 'force',
        'releaseName' => 'releaseName',
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

        if (null !== $this->force) {
            $res['force'] = $this->force;
        }

        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
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

        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }

        return $model;
    }
}
