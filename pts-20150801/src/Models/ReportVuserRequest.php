<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801\Models;

use AlibabaCloud\Tea\Model;

class ReportVuserRequest extends Model
{
    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $scenarioId;

    /**
     * @var int
     */
    public $vuser;

    /**
     * @var string
     */
    public $wskey;
    protected $_name = [
        'gmtCreated' => 'GmtCreated',
        'scenarioId' => 'ScenarioId',
        'vuser'      => 'Vuser',
        'wskey'      => 'Wskey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->vuser) {
            $res['Vuser'] = $this->vuser;
        }
        if (null !== $this->wskey) {
            $res['Wskey'] = $this->wskey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportVuserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['Vuser'])) {
            $model->vuser = $map['Vuser'];
        }
        if (isset($map['Wskey'])) {
            $model->wskey = $map['Wskey'];
        }

        return $model;
    }
}
