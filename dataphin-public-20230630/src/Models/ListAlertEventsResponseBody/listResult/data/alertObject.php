<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data;

use AlibabaCloud\Tea\Model;

class alertObject extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example VDM_BATCH
     *
     * @var string
     */
    public $sourceSystemType;

    /**
     * @example STREAM_TASK
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'sourceSystemType' => 'SourceSystemType',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceSystemType) {
            $res['SourceSystemType'] = $this->sourceSystemType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceSystemType'])) {
            $model->sourceSystemType = $map['SourceSystemType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
