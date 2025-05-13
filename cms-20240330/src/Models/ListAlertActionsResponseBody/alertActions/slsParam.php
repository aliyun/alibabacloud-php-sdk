<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

use AlibabaCloud\Dara\Model;

class slsParam extends Model
{
    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logstore' => 'logstore',
        'project' => 'project',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
