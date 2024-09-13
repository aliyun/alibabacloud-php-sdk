<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryRecordMinutesUrlResponseBody;

use AlibabaCloud\Tea\Model;

class recordMinutesUrls extends Model
{
    /**
     * @example url
     *
     * @var string
     */
    public $recordMinutesUrl;
    protected $_name = [
        'recordMinutesUrl' => 'RecordMinutesUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordMinutesUrl) {
            $res['RecordMinutesUrl'] = $this->recordMinutesUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordMinutesUrls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordMinutesUrl'])) {
            $model->recordMinutesUrl = $map['RecordMinutesUrl'];
        }

        return $model;
    }
}
