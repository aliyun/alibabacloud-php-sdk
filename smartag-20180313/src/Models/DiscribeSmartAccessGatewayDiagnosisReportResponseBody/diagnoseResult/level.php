<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult;

use AlibabaCloud\Tea\Model;

class level extends Model
{
    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $total;

    /**
     * @var string
     */
    public $biz;
    protected $_name = [
        'configuration' => 'Configuration',
        'total'         => 'Total',
        'biz'           => 'Biz',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return level
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }

        return $model;
    }
}
