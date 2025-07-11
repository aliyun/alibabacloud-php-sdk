<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetVersionDownloadUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $fullDownloadUrl;
    protected $_name = [
        'fullDownloadUrl' => 'FullDownloadUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullDownloadUrl) {
            $res['FullDownloadUrl'] = $this->fullDownloadUrl;
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
        if (isset($map['FullDownloadUrl'])) {
            $model->fullDownloadUrl = $map['FullDownloadUrl'];
        }

        return $model;
    }
}
