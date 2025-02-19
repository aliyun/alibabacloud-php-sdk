<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Dara\Model;

class UpdateAlertPlanRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;
    /**
     * @var int
     */
    public $planId;
    /**
     * @var string
     */
    public $versions;
    protected $_name = [
        'dataSourceId' => 'dataSourceId',
        'planId'       => 'planId',
        'versions'     => 'versions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->versions) {
            $res['versions'] = $this->versions;
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
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['versions'])) {
            $model->versions = $map['versions'];
        }

        return $model;
    }
}
