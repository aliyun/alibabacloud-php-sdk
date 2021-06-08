<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetRoutineSubdomainRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var mixed[]
     */
    public $subdomains;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'subdomains' => 'Subdomains',
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
        if (null !== $this->subdomains) {
            $res['Subdomains'] = $this->subdomains;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRoutineSubdomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Subdomains'])) {
            $model->subdomains = $map['Subdomains'];
        }

        return $model;
    }
}
