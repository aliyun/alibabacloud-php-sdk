<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

use AlibabaCloud\Tea\Model;

class slsParam extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $logstore;

    /**
     * @example test
     *
     * @var string
     */
    public $project;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logstore' => 'logstore',
        'project' => 'project',
        'regionId' => 'regionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
