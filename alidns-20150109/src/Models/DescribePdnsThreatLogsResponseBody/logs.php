<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsThreatLogsResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var string
     */
    public $threatLevel;

    /**
     * @var string
     */
    public $threatTime;

    /**
     * @var string
     */
    public $threatType;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'subDomain'   => 'SubDomain',
        'threatLevel' => 'ThreatLevel',
        'threatTime'  => 'ThreatTime',
        'threatType'  => 'ThreatType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }
        if (null !== $this->threatTime) {
            $res['ThreatTime'] = $this->threatTime;
        }
        if (null !== $this->threatType) {
            $res['ThreatType'] = $this->threatType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }
        if (isset($map['ThreatTime'])) {
            $model->threatTime = $map['ThreatTime'];
        }
        if (isset($map['ThreatType'])) {
            $model->threatType = $map['ThreatType'];
        }

        return $model;
    }
}
