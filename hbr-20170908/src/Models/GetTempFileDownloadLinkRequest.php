<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class GetTempFileDownloadLinkRequest extends Model
{
    /**
     * @var string
     */
    public $tempFileKey;
    protected $_name = [
        'tempFileKey' => 'TempFileKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tempFileKey) {
            $res['TempFileKey'] = $this->tempFileKey;
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
        if (isset($map['TempFileKey'])) {
            $model->tempFileKey = $map['TempFileKey'];
        }

        return $model;
    }
}
