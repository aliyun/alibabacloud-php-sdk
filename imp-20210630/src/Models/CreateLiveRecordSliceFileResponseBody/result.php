<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRecordSliceFileResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $sliceRecordUrl;
    protected $_name = [
        'sliceRecordUrl' => 'SliceRecordUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sliceRecordUrl) {
            $res['SliceRecordUrl'] = $this->sliceRecordUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SliceRecordUrl'])) {
            $model->sliceRecordUrl = $map['SliceRecordUrl'];
        }

        return $model;
    }
}
