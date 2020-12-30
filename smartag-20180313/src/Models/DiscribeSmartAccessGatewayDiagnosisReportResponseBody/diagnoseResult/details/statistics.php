<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var int
     */
    public $warning;

    /**
     * @var int
     */
    public $error;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $info;
    protected $_name = [
        'warning' => 'Warning',
        'error'   => 'Error',
        'total'   => 'Total',
        'info'    => 'Info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->warning) {
            $res['Warning'] = $this->warning;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Warning'])) {
            $model->warning = $map['Warning'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }

        return $model;
    }
}
