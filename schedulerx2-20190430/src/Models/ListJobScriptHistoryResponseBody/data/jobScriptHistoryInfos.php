<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobScriptHistoryResponseBody\data;

use AlibabaCloud\Dara\Model;

class jobScriptHistoryInfos extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @var string
     */
    public $versionesDescription;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'scriptContent' => 'ScriptContent',
        'versionesDescription' => 'VersionesDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
