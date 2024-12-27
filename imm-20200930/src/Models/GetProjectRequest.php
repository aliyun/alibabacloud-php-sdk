<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetProjectRequest extends Model
{
    /**
     * @description The name of the project. You can obtain the name from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description Specifies whether to enable real-time retrieval of file statistics. Default value: false.
     *
     *   If you set the value to true, the returned values of FileCount and TotalFileSize in the response are valid.
     *   If you set the value to false, the returned values of FileCount and TotalFileSize in the response are invalid or equal to 0.
     *
     * @example true
     *
     * @var bool
     */
    public $withStatistics;
    protected $_name = [
        'projectName'    => 'ProjectName',
        'withStatistics' => 'WithStatistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->withStatistics) {
            $res['WithStatistics'] = $this->withStatistics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['WithStatistics'])) {
            $model->withStatistics = $map['WithStatistics'];
        }

        return $model;
    }
}
