<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class moreDataFileUrlList extends Model
{
    /**
     * @var string[]
     */
    public $moreDataFileUrl;
    protected $_name = [
        'moreDataFileUrl' => 'MoreDataFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moreDataFileUrl) {
            $res['MoreDataFileUrl'] = $this->moreDataFileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moreDataFileUrlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MoreDataFileUrl'])) {
            if (!empty($map['MoreDataFileUrl'])) {
                $model->moreDataFileUrl = $map['MoreDataFileUrl'];
            }
        }

        return $model;
    }
}
