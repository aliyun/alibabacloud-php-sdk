<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DownloadSmapleBatchResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $fileDownloadURL;
    protected $_name = [
        'fileDownloadURL' => 'fileDownloadURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileDownloadURL) {
            $res['fileDownloadURL'] = $this->fileDownloadURL;
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
        if (isset($map['fileDownloadURL'])) {
            $model->fileDownloadURL = $map['fileDownloadURL'];
        }

        return $model;
    }
}
