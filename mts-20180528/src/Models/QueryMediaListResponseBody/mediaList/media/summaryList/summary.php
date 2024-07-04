<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListResponseBody\mediaList\media\summaryList;

use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListResponseBody\mediaList\media\summaryList\summary\file;
use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @var string
     */
    public $activityName;

    /**
     * @var file
     */
    public $file;

    /**
     * @var string
     */
    public $mediaWorkflowId;

    /**
     * @var string
     */
    public $mediaWorkflowName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'activityName'      => 'ActivityName',
        'file'              => 'File',
        'mediaWorkflowId'   => 'MediaWorkflowId',
        'mediaWorkflowName' => 'MediaWorkflowName',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->mediaWorkflowId) {
            $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        }
        if (null !== $this->mediaWorkflowName) {
            $res['MediaWorkflowName'] = $this->mediaWorkflowName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }
        if (isset($map['MediaWorkflowId'])) {
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if (isset($map['MediaWorkflowName'])) {
            $model->mediaWorkflowName = $map['MediaWorkflowName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
