<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\Features\quota;

class Features extends Model
{
    /**
     * @var quota
     */
    public $quota;
    protected $_name = [
        'quota' => 'Quota',
    ];

    public function validate()
    {
        if (null !== $this->quota) {
            $this->quota->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toArray($noStream) : $this->quota;
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
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }

        return $model;
    }
}
