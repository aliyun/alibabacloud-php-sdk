<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class CreateDcdnSubTaskRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $reportIds;
    protected $_name = [
        'domainName' => 'DomainName',
        'reportIds' => 'ReportIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->reportIds) {
            $res['ReportIds'] = $this->reportIds;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ReportIds'])) {
            $model->reportIds = $map['ReportIds'];
        }

        return $model;
    }
}
