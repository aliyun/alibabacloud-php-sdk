<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class SeccompProfile extends Model
{
    /**
     * @var string
     */
    public $localhostProfile;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'localhostProfile' => 'LocalhostProfile',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->localhostProfile) {
            $res['LocalhostProfile'] = $this->localhostProfile;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['LocalhostProfile'])) {
            $model->localhostProfile = $map['LocalhostProfile'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
