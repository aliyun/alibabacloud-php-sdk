<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobScriptHistoryResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example 2025-06-29 15:56:36
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1963096506470832
     *
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @example init version
     *
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'scriptContent' => 'ScriptContent',
        'versionDescription' => 'VersionDescription',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }

        return $model;
    }
}
