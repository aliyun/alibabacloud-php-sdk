<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryRecordMinutesUrlResponseBody;

use AlibabaCloud\Dara\Model;

class recordMinutesUrls extends Model
{
    /**
     * @var string
     */
    public $recordMinutesUrl;
    protected $_name = [
        'recordMinutesUrl' => 'RecordMinutesUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordMinutesUrl) {
            $res['RecordMinutesUrl'] = $this->recordMinutesUrl;
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
        if (isset($map['RecordMinutesUrl'])) {
            $model->recordMinutesUrl = $map['RecordMinutesUrl'];
        }

        return $model;
    }
}
