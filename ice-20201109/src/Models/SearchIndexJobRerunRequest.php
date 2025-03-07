<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchIndexJobRerunRequest extends Model
{
    /**
     * @description The ID of the media asset. Separate multiple IDs with commas (,).
     *
     * This parameter is required.
     * @example ******b48fb04483915d4f2cd8******,******c48fb37407365d4f2cd8******
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description The search library.
     *
     * @example test-1
     *
     * @var string
     */
    public $searchLibName;

    /**
     * @description The type of the job. Separate multiple types with commas (,).
     *
     *   aiLabel: smart tagging.
     *   face: face recognition.
     *   mm: large visual model.
     *
     * @example AiLabel,Face,Mm
     *
     * @var string
     */
    public $task;
    protected $_name = [
        'mediaIds'      => 'MediaIds',
        'searchLibName' => 'SearchLibName',
        'task'          => 'Task',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchIndexJobRerunRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }

        return $model;
    }
}
