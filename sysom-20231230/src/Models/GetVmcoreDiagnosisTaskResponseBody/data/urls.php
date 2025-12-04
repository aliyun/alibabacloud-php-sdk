<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetVmcoreDiagnosisTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class urls extends Model
{
    /**
     * @var string
     */
    public $debuginfoCommonUrl;

    /**
     * @var string
     */
    public $debuginfoUrl;

    /**
     * @var string
     */
    public $dmesgUrl;

    /**
     * @var string
     */
    public $vmcoreUrl;
    protected $_name = [
        'debuginfoCommonUrl' => 'debuginfoCommonUrl',
        'debuginfoUrl' => 'debuginfoUrl',
        'dmesgUrl' => 'dmesgUrl',
        'vmcoreUrl' => 'vmcoreUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->debuginfoCommonUrl) {
            $res['debuginfoCommonUrl'] = $this->debuginfoCommonUrl;
        }

        if (null !== $this->debuginfoUrl) {
            $res['debuginfoUrl'] = $this->debuginfoUrl;
        }

        if (null !== $this->dmesgUrl) {
            $res['dmesgUrl'] = $this->dmesgUrl;
        }

        if (null !== $this->vmcoreUrl) {
            $res['vmcoreUrl'] = $this->vmcoreUrl;
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
        if (isset($map['debuginfoCommonUrl'])) {
            $model->debuginfoCommonUrl = $map['debuginfoCommonUrl'];
        }

        if (isset($map['debuginfoUrl'])) {
            $model->debuginfoUrl = $map['debuginfoUrl'];
        }

        if (isset($map['dmesgUrl'])) {
            $model->dmesgUrl = $map['dmesgUrl'];
        }

        if (isset($map['vmcoreUrl'])) {
            $model->vmcoreUrl = $map['vmcoreUrl'];
        }

        return $model;
    }
}
