<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetSuspiciousStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $groupIdList;
    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'groupIdList' => 'GroupIdList',
        'sourceIp'    => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['GroupIdList'])) {
            $model->groupIdList = $map['GroupIdList'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
