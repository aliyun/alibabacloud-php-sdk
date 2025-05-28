<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DeleteReportDefinitionRequest extends Model
{
    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $reportTaskId;
    protected $_name = [
        'nbid' => 'Nbid',
        'reportTaskId' => 'ReportTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->reportTaskId) {
            $res['ReportTaskId'] = $this->reportTaskId;
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
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['ReportTaskId'])) {
            $model->reportTaskId = $map['ReportTaskId'];
        }

        return $model;
    }
}
