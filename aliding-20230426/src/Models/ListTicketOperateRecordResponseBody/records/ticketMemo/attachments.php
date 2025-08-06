<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordResponseBody\records\ticketMemo;

use AlibabaCloud\Dara\Model;

class attachments extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'fileName' => 'FileName',
        'key' => 'Key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
