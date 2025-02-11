<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetSqlOptimizeAdviceRequest extends Model
{
    /**
     * @var string
     */
    public $consoleContext;
    /**
     * @var string
     */
    public $endDt;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $instanceIds;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $startDt;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'endDt'          => 'EndDt',
        'engine'         => 'Engine',
        'instanceIds'    => 'InstanceIds',
        'region'         => 'Region',
        'startDt'        => 'StartDt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }

        if (null !== $this->endDt) {
            $res['EndDt'] = $this->endDt;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->startDt) {
            $res['StartDt'] = $this->startDt;
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
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }

        if (isset($map['EndDt'])) {
            $model->endDt = $map['EndDt'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['StartDt'])) {
            $model->startDt = $map['StartDt'];
        }

        return $model;
    }
}
