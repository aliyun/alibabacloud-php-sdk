<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class SelectRequestOptions extends Model
{
    /**
     * @var int
     */
    public $maxSkippedRecordsAllowed;

    /**
     * @var bool
     */
    public $skipPartialDataRecord;
    protected $_name = [
        'maxSkippedRecordsAllowed' => 'MaxSkippedRecordsAllowed',
        'skipPartialDataRecord'    => 'SkipPartialDataRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxSkippedRecordsAllowed) {
            $res['MaxSkippedRecordsAllowed'] = $this->maxSkippedRecordsAllowed;
        }
        if (null !== $this->skipPartialDataRecord) {
            $res['SkipPartialDataRecord'] = $this->skipPartialDataRecord;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectRequestOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxSkippedRecordsAllowed'])) {
            $model->maxSkippedRecordsAllowed = $map['MaxSkippedRecordsAllowed'];
        }
        if (isset($map['SkipPartialDataRecord'])) {
            $model->skipPartialDataRecord = $map['SkipPartialDataRecord'];
        }

        return $model;
    }
}
