<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801\Models;

use AlibabaCloud\Tea\Model;

class SetScenarioStatusRequest extends Model
{
    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var int
     */
    public $scenarioId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $wskey;
    protected $_name = [
        'nodeIp'     => 'NodeIp',
        'scenarioId' => 'ScenarioId',
        'status'     => 'Status',
        'wskey'      => 'Wskey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wskey) {
            $res['Wskey'] = $this->wskey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetScenarioStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Wskey'])) {
            $model->wskey = $map['Wskey'];
        }

        return $model;
    }
}
