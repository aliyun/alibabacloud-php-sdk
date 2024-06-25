<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class fileUrlList extends Model
{
    /**
     * @var string[]
     */
    public $fileUrl;
    protected $_name = [
        'fileUrl' => 'FileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileUrlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            if (!empty($map['FileUrl'])) {
                $model->fileUrl = $map['FileUrl'];
            }
        }

        return $model;
    }
}
