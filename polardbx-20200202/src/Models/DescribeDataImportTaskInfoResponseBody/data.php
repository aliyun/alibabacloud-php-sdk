<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDataImportTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDataImportTaskInfoResponseBody\data\dataImportTaskDetailInfo;

class data extends Model
{
    /**
     * @var dataImportTaskDetailInfo
     */
    public $dataImportTaskDetailInfo;
    protected $_name = [
        'dataImportTaskDetailInfo' => 'DataImportTaskDetailInfo',
    ];

    public function validate()
    {
        if (null !== $this->dataImportTaskDetailInfo) {
            $this->dataImportTaskDetailInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataImportTaskDetailInfo) {
            $res['DataImportTaskDetailInfo'] = null !== $this->dataImportTaskDetailInfo ? $this->dataImportTaskDetailInfo->toArray($noStream) : $this->dataImportTaskDetailInfo;
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
        if (isset($map['DataImportTaskDetailInfo'])) {
            $model->dataImportTaskDetailInfo = dataImportTaskDetailInfo::fromMap($map['DataImportTaskDetailInfo']);
        }

        return $model;
    }
}
