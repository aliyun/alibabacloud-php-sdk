<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobScriptHistoryResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobScriptHistoryInfos extends Model
{
    /**
     * @example 2025-03-12 14:52:42
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1272118248844842
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
    public $versionesDescription;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'scriptContent' => 'ScriptContent',
        'versionesDescription' => 'VersionesDescription',
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
        if (null !== $this->versionesDescription) {
            $res['VersionesDescription'] = $this->versionesDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobScriptHistoryInfos
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
        if (isset($map['VersionesDescription'])) {
            $model->versionesDescription = $map['VersionesDescription'];
        }

        return $model;
    }
}
