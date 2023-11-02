<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogSourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logSource;

    /**
     * @example sas.cloudsiem.prod.cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logSourceName;
    protected $_name = [
        'logSource'     => 'LogSource',
        'logSourceName' => 'LogSourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logSource) {
            $res['LogSource'] = $this->logSource;
        }
        if (null !== $this->logSourceName) {
            $res['LogSourceName'] = $this->logSourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogSource'])) {
            $model->logSource = $map['LogSource'];
        }
        if (isset($map['LogSourceName'])) {
            $model->logSourceName = $map['LogSourceName'];
        }

        return $model;
    }
}
