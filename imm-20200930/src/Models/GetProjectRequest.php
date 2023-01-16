<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetProjectRequest extends Model
{
    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
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
