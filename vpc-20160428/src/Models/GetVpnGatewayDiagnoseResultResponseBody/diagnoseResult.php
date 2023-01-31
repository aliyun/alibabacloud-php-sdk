<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpnGatewayDiagnoseResultResponseBody;

use AlibabaCloud\Tea\Model;

class diagnoseResult extends Model
{
    /**
     * @example RouteEntryConflict
     *
     * @var string
     */
    public $diagnoseName;

    /**
     * @example {\"targetIp\":\"192.168.0.1\",\"srcIp\":\"192.168.1.1\",\"rtt\":-1.0,\"lossRate\":100.0}
     *
     * @var string
     */
    public $diagnoseResultDescription;

    /**
     * @example normal
     *
     * @var string
     */
    public $diagnoseResultLevel;
    protected $_name = [
        'diagnoseName'              => 'DiagnoseName',
        'diagnoseResultDescription' => 'DiagnoseResultDescription',
        'diagnoseResultLevel'       => 'DiagnoseResultLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnoseName) {
            $res['DiagnoseName'] = $this->diagnoseName;
        }
        if (null !== $this->diagnoseResultDescription) {
            $res['DiagnoseResultDescription'] = $this->diagnoseResultDescription;
        }
        if (null !== $this->diagnoseResultLevel) {
            $res['DiagnoseResultLevel'] = $this->diagnoseResultLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseName'])) {
            $model->diagnoseName = $map['DiagnoseName'];
        }
        if (isset($map['DiagnoseResultDescription'])) {
            $model->diagnoseResultDescription = $map['DiagnoseResultDescription'];
        }
        if (isset($map['DiagnoseResultLevel'])) {
            $model->diagnoseResultLevel = $map['DiagnoseResultLevel'];
        }

        return $model;
    }
}
