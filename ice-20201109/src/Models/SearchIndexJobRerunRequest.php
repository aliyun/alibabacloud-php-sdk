<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SearchIndexJobRerunRequest extends Model
{
    /**
     * @var string
     */
    public $mediaIds;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $searchLibName;

    /**
     * @var string
     */
    public $task;
    protected $_name = [
        'mediaIds' => 'MediaIds',
        'namespace' => 'Namespace',
        'searchLibName' => 'SearchLibName',
        'task' => 'Task',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        if (null !== $this->task) {
            $res['Task'] = $this->task;
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
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
