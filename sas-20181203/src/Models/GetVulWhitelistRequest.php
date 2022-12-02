<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vulWhitelistId) {
            $res['VulWhitelistId'] = $this->vulWhitelistId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVulWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VulWhitelistId'])) {
            $model->vulWhitelistId = $map['VulWhitelistId'];
        }

        return $model;
    }
}
