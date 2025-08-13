<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListDownloadUrlResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $downloadFileUrl;
    protected $_name = [
        'downloadFileUrl' => 'downloadFileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadFileUrl) {
            $res['downloadFileUrl'] = $this->downloadFileUrl;
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
        if (isset($map['downloadFileUrl'])) {
            $model->downloadFileUrl = $map['downloadFileUrl'];
        }

        return $model;
    }
}
