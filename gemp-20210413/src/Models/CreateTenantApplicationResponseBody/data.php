<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateTenantApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://xxxx
     *
     * @var string
     */
    public $openUrl;

    /**
     * @example OPENED 已开通 OPENING 开通中
     *
     * @var string
     */
    public $progress;
    protected $_name = [
        'openUrl'  => 'openUrl',
        'progress' => 'progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openUrl) {
            $res['openUrl'] = $this->openUrl;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['openUrl'])) {
            $model->openUrl = $map['openUrl'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        return $model;
    }
}
