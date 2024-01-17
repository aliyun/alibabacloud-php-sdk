<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class CheckAoneAppAuditRequest extends Model
{
    /**
     * @var string
     */
    public $aoneAppName;
    protected $_name = [
        'aoneAppName' => 'AoneAppName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aoneAppName) {
            $res['AoneAppName'] = $this->aoneAppName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckAoneAppAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AoneAppName'])) {
            $model->aoneAppName = $map['AoneAppName'];
        }

        return $model;
    }
}
