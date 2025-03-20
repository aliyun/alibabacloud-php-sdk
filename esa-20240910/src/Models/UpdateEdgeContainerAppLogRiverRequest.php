<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateEdgeContainerAppLogRiverRequest extends Model
{
    /**
     * @description The application ID, which can be obtained by calling the [ListEdgeContainerApps](https://help.aliyun.com/document_detail/2852396.html) operation.
     *
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The log path of the container.
     *
     * @example /root/hello.log
     *
     * @var string
     */
    public $path;

    /**
     * @description Specifies whether to collect the standard output of the container.
     *
     * @example true
     *
     * @var bool
     */
    public $stdout;
    protected $_name = [
        'appId' => 'AppId',
        'path' => 'Path',
        'stdout' => 'Stdout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->stdout) {
            $res['Stdout'] = $this->stdout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEdgeContainerAppLogRiverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Stdout'])) {
            $model->stdout = $map['Stdout'];
        }

        return $model;
    }
}
