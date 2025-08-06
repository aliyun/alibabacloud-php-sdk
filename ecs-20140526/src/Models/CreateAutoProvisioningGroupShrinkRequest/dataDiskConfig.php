<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest;

use AlibabaCloud\Dara\Model;

class dataDiskConfig extends Model
{
    /**
     * @var string
     */
    public $diskCategory;
    protected $_name = [
        'diskCategory' => 'DiskCategory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
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
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }

        return $model;
    }
}
