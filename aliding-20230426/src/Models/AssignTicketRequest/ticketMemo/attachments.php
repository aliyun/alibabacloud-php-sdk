<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AssignTicketRequest\ticketMemo;

use AlibabaCloud\Tea\Model;

class attachments extends Model
{
    /**
     * @example ticket/image/44708069/43003/e27aec4499.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @example wahaha.txt
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'fileName' => 'FileName',
        'key'      => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return attachments
     */
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
