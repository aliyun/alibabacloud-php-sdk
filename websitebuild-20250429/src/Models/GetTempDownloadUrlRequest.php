<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetTempDownloadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $ossKey;
    protected $_name = [
        'ossKey' => 'OssKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
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
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        return $model;
    }
}
