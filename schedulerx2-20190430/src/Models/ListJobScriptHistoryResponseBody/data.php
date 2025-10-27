<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobScriptHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobScriptHistoryResponseBody\data\jobScriptHistoryInfos;

class data extends Model
{
    /**
     * @var jobScriptHistoryInfos[]
     */
    public $jobScriptHistoryInfos;
    protected $_name = [
        'jobScriptHistoryInfos' => 'JobScriptHistoryInfos',
    ];

    public function validate()
    {
        if (\is_array($this->jobScriptHistoryInfos)) {
            Model::validateArray($this->jobScriptHistoryInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobScriptHistoryInfos) {
            if (\is_array($this->jobScriptHistoryInfos)) {
                $res['JobScriptHistoryInfos'] = [];
                $n1 = 0;
                foreach ($this->jobScriptHistoryInfos as $item1) {
                    $res['JobScriptHistoryInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['JobScriptHistoryInfos'])) {
            if (!empty($map['JobScriptHistoryInfos'])) {
                $model->jobScriptHistoryInfos = [];
                $n1 = 0;
                foreach ($map['JobScriptHistoryInfos'] as $item1) {
                    $model->jobScriptHistoryInfos[$n1] = jobScriptHistoryInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
