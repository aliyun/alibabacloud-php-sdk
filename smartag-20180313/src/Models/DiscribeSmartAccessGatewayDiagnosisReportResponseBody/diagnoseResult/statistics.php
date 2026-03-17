<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult;

use AlibabaCloud\Dara\Model;

class statistics extends Model
{
    /**
     * @var int
     */
    public $error;

    /**
     * @var int
     */
    public $info;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $warning;
    protected $_name = [
        'error' => 'Error',
        'info' => 'Info',
        'total' => 'Total',
        'warning' => 'Warning',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->warning) {
            $res['Warning'] = $this->warning;
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
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['Warning'])) {
            $model->warning = $map['Warning'];
        }

        return $model;
    }
}
