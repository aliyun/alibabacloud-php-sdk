<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpnGatewayDiagnoseResultResponseBody;

use AlibabaCloud\Dara\Model;

class diagnoseResult extends Model
{
    /**
     * @var string
     */
    public $diagnoseName;
    /**
     * @var string
     */
    public $diagnoseResultDescription;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
