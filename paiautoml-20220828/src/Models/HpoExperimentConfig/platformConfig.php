<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig;

use AlibabaCloud\Tea\Model;

class platformConfig extends Model
{
    /**
     * @var string[]
     */
    public $cmd;

    /**
     * @example DLC, MC,paiflow, etc
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resume;
    protected $_name = [
        'cmd'    => 'cmd',
        'name'   => 'name',
        'resume' => 'resume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmd) {
            $res['cmd'] = $this->cmd;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resume) {
            $res['resume'] = $this->resume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return platformConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cmd'])) {
            if (!empty($map['cmd'])) {
                $model->cmd = $map['cmd'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resume'])) {
            $model->resume = $map['resume'];
        }

        return $model;
    }
}
