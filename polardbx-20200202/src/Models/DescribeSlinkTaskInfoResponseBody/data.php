<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlinkTaskInfoResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlinkTaskInfoResponseBody\data\dataImportTaskDetailInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataImportTaskDetailInfo) {
            $res['DataImportTaskDetailInfo'] = null !== $this->dataImportTaskDetailInfo ? $this->dataImportTaskDetailInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataImportTaskDetailInfo'])) {
            $model->dataImportTaskDetailInfo = dataImportTaskDetailInfo::fromMap($map['DataImportTaskDetailInfo']);
        }

        return $model;
    }
}
