<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListAddonReleasesRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $parentAddonReleaseId;
    protected $_name = [
        'addonName' => 'addonName',
        'parentAddonReleaseId' => 'parentAddonReleaseId',
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

        if (null !== $this->parentAddonReleaseId) {
            $res['parentAddonReleaseId'] = $this->parentAddonReleaseId;
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

        if (isset($map['parentAddonReleaseId'])) {
            $model->parentAddonReleaseId = $map['parentAddonReleaseId'];
        }

        return $model;
    }
}
