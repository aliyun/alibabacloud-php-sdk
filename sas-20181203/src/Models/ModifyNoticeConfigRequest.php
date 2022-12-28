<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyNoticeConfigRequest extends Model
{
    /**
     * @example yundun_webguard_event
     *
     * @var string
     */
    public $project;

    /**
     * @example 4
     *
     * @var int
     */
    public $route;

    /**
     * @example 42.178.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example 1
     *
     * @var int
     */
    public $timeLimit;
    protected $_name = [
        'project'   => 'Project',
        'route'     => 'Route',
        'sourceIp'  => 'SourceIp',
        'timeLimit' => 'TimeLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->route) {
            $res['Route'] = $this->route;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->timeLimit) {
            $res['TimeLimit'] = $this->timeLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNoticeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Route'])) {
            $model->route = $map['Route'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TimeLimit'])) {
            $model->timeLimit = $map['TimeLimit'];
        }

        return $model;
    }
}
