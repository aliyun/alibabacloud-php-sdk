<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAlertEventResponseBody\alertEventInfo;

use AlibabaCloud\Tea\Model;

class belongProject extends Model
{
    /**
     * @example biz_1
     *
     * @var string
     */
    public $bizName;

    /**
     * @example project_1
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'bizName' => 'BizName',
        'projectName' => 'ProjectName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return belongProject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
