<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListUpgradeItemsResponseBody;

use AlibabaCloud\Dara\Model;

class upgradeItems extends Model
{
    /**
     * @var string
     */
    public $upgradeItemId;
    protected $_name = [
        'upgradeItemId' => 'UpgradeItemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->upgradeItemId) {
            $res['UpgradeItemId'] = $this->upgradeItemId;
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
        if (isset($map['UpgradeItemId'])) {
            $model->upgradeItemId = $map['UpgradeItemId'];
        }

        return $model;
    }
}
