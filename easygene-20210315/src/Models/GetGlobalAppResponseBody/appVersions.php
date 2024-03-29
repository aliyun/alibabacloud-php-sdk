<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\GetGlobalAppResponseBody;

use AlibabaCloud\Tea\Model;

class appVersions extends Model
{
    /**
     * @example 1.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example 初始版本
     *
     * @var string
     */
    public $comment;

    /**
     * @example yyyy/MM/dd HH:mm:ss
     *
     * @var string
     */
    public $lastModified;
    protected $_name = [
        'appVersion'   => 'AppVersion',
        'comment'      => 'Comment',
        'lastModified' => 'LastModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }

        return $model;
    }
}
