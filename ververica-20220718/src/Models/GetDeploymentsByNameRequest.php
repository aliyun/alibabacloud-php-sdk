<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class GetDeploymentsByNameRequest extends Model
{
    /**
     * @var bool
     */
    public $ignoreJobSummary;

    /**
     * @var bool
     */
    public $ignoreResourceSetting;
    protected $_name = [
        'ignoreJobSummary' => 'ignoreJobSummary',
        'ignoreResourceSetting' => 'ignoreResourceSetting',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoreJobSummary) {
            $res['ignoreJobSummary'] = $this->ignoreJobSummary;
        }

        if (null !== $this->ignoreResourceSetting) {
            $res['ignoreResourceSetting'] = $this->ignoreResourceSetting;
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
        if (isset($map['ignoreJobSummary'])) {
            $model->ignoreJobSummary = $map['ignoreJobSummary'];
        }

        if (isset($map['ignoreResourceSetting'])) {
            $model->ignoreResourceSetting = $map['ignoreResourceSetting'];
        }

        return $model;
    }
}
