<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobScriptHistoryResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobScriptHistoryResponseBody\data\jobScriptHistoryInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description -
     *
     * @var jobScriptHistoryInfos[]
     */
    public $jobScriptHistoryInfos;
    protected $_name = [
        'jobScriptHistoryInfos' => 'JobScriptHistoryInfos',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobScriptHistoryInfos) {
            $res['JobScriptHistoryInfos'] = [];
            if (null !== $this->jobScriptHistoryInfos && \is_array($this->jobScriptHistoryInfos)) {
                $n = 0;
                foreach ($this->jobScriptHistoryInfos as $item) {
                    $res['JobScriptHistoryInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['JobScriptHistoryInfos'])) {
            if (!empty($map['JobScriptHistoryInfos'])) {
                $model->jobScriptHistoryInfos = [];
                $n = 0;
                foreach ($map['JobScriptHistoryInfos'] as $item) {
                    $model->jobScriptHistoryInfos[$n++] = null !== $item ? jobScriptHistoryInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
