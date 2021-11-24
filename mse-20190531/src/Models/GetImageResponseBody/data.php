<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 当前集群镜像版本的4位全名
     *
     * @var string
     */
    public $currentVersionFullShowName;

    /**
     * @description 可升级的最大版本变更日志url
     *
     * @var string
     */
    public $maxVersionChangelogUrl;

    /**
     * @description 可升级的增量版本Code
     *
     * @var string
     */
    public $maxVersionCode;

    /**
     * @description 可升级的增量版本全名
     *
     * @var string
     */
    public $maxVersionFullShowName;
    protected $_name = [
        'currentVersionFullShowName' => 'CurrentVersionFullShowName',
        'maxVersionChangelogUrl'     => 'MaxVersionChangelogUrl',
        'maxVersionCode'             => 'MaxVersionCode',
        'maxVersionFullShowName'     => 'MaxVersionFullShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentVersionFullShowName) {
            $res['CurrentVersionFullShowName'] = $this->currentVersionFullShowName;
        }
        if (null !== $this->maxVersionChangelogUrl) {
            $res['MaxVersionChangelogUrl'] = $this->maxVersionChangelogUrl;
        }
        if (null !== $this->maxVersionCode) {
            $res['MaxVersionCode'] = $this->maxVersionCode;
        }
        if (null !== $this->maxVersionFullShowName) {
            $res['MaxVersionFullShowName'] = $this->maxVersionFullShowName;
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
        if (isset($map['CurrentVersionFullShowName'])) {
            $model->currentVersionFullShowName = $map['CurrentVersionFullShowName'];
        }
        if (isset($map['MaxVersionChangelogUrl'])) {
            $model->maxVersionChangelogUrl = $map['MaxVersionChangelogUrl'];
        }
        if (isset($map['MaxVersionCode'])) {
            $model->maxVersionCode = $map['MaxVersionCode'];
        }
        if (isset($map['MaxVersionFullShowName'])) {
            $model->maxVersionFullShowName = $map['MaxVersionFullShowName'];
        }

        return $model;
    }
}
