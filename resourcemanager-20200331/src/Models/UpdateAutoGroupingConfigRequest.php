<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class UpdateAutoGroupingConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $enableExistingResourcesTransfer;
    protected $_name = [
        'enableExistingResourcesTransfer' => 'EnableExistingResourcesTransfer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableExistingResourcesTransfer) {
            $res['EnableExistingResourcesTransfer'] = $this->enableExistingResourcesTransfer;
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
        if (isset($map['EnableExistingResourcesTransfer'])) {
            $model->enableExistingResourcesTransfer = $map['EnableExistingResourcesTransfer'];
        }

        return $model;
    }
}
