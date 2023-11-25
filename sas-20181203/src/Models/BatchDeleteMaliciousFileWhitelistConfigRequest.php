<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteMaliciousFileWhitelistConfigRequest extends Model
{
    /**
     * @var int[]
     */
    public $configIdList;
    protected $_name = [
        'configIdList' => 'ConfigIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configIdList) {
            $res['ConfigIdList'] = $this->configIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteMaliciousFileWhitelistConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigIdList'])) {
            if (!empty($map['ConfigIdList'])) {
                $model->configIdList = $map['ConfigIdList'];
            }
        }

        return $model;
    }
}
