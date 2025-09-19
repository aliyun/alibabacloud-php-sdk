<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetVulWhitelistRequest extends Model
{
    /**
     * @var int
     */
    public $vulWhitelistId;
    protected $_name = [
        'vulWhitelistId' => 'VulWhitelistId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vulWhitelistId) {
            $res['VulWhitelistId'] = $this->vulWhitelistId;
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
        if (isset($map['VulWhitelistId'])) {
            $model->vulWhitelistId = $map['VulWhitelistId'];
        }

        return $model;
    }
}
