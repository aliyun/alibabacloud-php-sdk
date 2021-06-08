<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetRoutineSubdomainShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $subdomainsShrink;
    protected $_name = [
        'ownerId'          => 'OwnerId',
        'subdomainsShrink' => 'Subdomains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->subdomainsShrink) {
            $res['Subdomains'] = $this->subdomainsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRoutineSubdomainShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Subdomains'])) {
            $model->subdomainsShrink = $map['Subdomains'];
        }

        return $model;
    }
}
