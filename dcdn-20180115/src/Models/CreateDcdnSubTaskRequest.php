<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnSubTaskRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $reportIds;
    protected $_name = [
        'domainName' => 'DomainName',
        'ownerId'    => 'OwnerId',
        'reportIds'  => 'ReportIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->reportIds) {
            $res['ReportIds'] = $this->reportIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDcdnSubTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReportIds'])) {
            $model->reportIds = $map['ReportIds'];
        }

        return $model;
    }
}
