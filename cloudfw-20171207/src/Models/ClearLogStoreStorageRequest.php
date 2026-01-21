<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ClearLogStoreStorageRequest extends Model
{
    /**
     * @var string
     */
    public $site;
    protected $_name = [
        'site' => 'Site',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->site) {
            $res['Site'] = $this->site;
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
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        return $model;
    }
}
