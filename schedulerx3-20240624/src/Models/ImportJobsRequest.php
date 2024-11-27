<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class ImportJobsRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoCreateApp;

    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example {
     * "paramMap": {},
     * "timeExpression": "* * * * * ?"
     * }
     * @var string
     */
    public $content;

    /**
     * @example true
     *
     * @var bool
     */
    public $overwrite;
    protected $_name = [
        'autoCreateApp' => 'AutoCreateApp',
        'clusterId'     => 'ClusterId',
        'content'       => 'Content',
        'overwrite'     => 'Overwrite',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCreateApp) {
            $res['AutoCreateApp'] = $this->autoCreateApp;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreateApp'])) {
            $model->autoCreateApp = $map['AutoCreateApp'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        return $model;
    }
}
