<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class SeccompProfile extends Model
{
    /**
     * @example my-profiles/profile-allow.json
     *
     * @var string
     */
    public $localhostProfile;

    /**
     * @example Unconfined
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'localhostProfile' => 'LocalhostProfile',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SeccompProfile
     */
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
