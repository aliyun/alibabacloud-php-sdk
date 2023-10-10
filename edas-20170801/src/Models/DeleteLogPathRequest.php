<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteLogPathRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 3616cdca-4f92-4413**********
     *
     * @var string
     */
    public $appId;

    /**
     * @description The absolute path of the log directory that you want to remove. The value must start and end with a forward slash (`/`) and must contain `/log` or `/logs`. The following directories are the default log directories in Enterprise Distributed Application Service (EDAS):
     *
     *   /home/admin/edas-container/logs/
     *   /home/admin/taobao-tomcat-7.0.59/logs/
     *   /home/admin/taobao-tomcat-production-7.0.59.3/logs/
     *   /home/admin/taobao-tomcat-production-7.0.70/logs/
     *   /home/admin/edas-agent/logs/
     *
     * @example /temp/log/
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'appId' => 'AppId',
        'path'  => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLogPathRequest
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

        return $model;
    }
}
