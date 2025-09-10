<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListIntegrationPolicyStorageRequirementsRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $addonReleaseName;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'addonName' => 'addonName',
        'addonReleaseName' => 'addonReleaseName',
        'storageType' => 'storageType',
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

        if (null !== $this->addonReleaseName) {
            $res['addonReleaseName'] = $this->addonReleaseName;
        }

        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
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

        if (isset($map['addonReleaseName'])) {
            $model->addonReleaseName = $map['addonReleaseName'];
        }

        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }

        return $model;
    }
}
