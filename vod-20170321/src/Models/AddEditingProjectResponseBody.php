<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectResponseBody\project;
use AlibabaCloud\Tea\Model;

class AddEditingProjectResponseBody extends Model
{
    /**
     * @description The information about the online editing project. For more information about the structure, see [EditingProject](https://help.aliyun.com/document_detail/52839.html).
     *
     * @var project
     */
    public $project;

    /**
     * @description The ID of the request.
     *
     * @example E4EBD2BF-5EB0-4476-8829-9D94E1B1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'project'   => 'Project',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = null !== $this->project ? $this->project->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEditingProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = project::fromMap($map['Project']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
