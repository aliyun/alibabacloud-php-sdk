<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class ImportWorkflowsRequest extends Model
{
    /**
     * @var bool
     */
    public $autoCreateApp;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $overwrite;
    protected $_name = [
        'autoCreateApp' => 'AutoCreateApp',
        'clusterId' => 'ClusterId',
        'content' => 'Content',
        'overwrite' => 'Overwrite',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
