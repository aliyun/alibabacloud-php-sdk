<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupClientsRequest extends Model
{
    /**
     * @var string
     */
    public $supportRegionId;
    protected $_name = [
        'supportRegionId' => 'SupportRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportRegionId) {
            $res['SupportRegionId'] = $this->supportRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupClientsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportRegionId'])) {
            $model->supportRegionId = $map['SupportRegionId'];
        }

        return $model;
    }
}
