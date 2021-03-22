<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainConfigResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainConfigResponseBody\result\domainConfig;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $wafTaskId;

    /**
     * @var domainConfig
     */
    public $domainConfig;
    protected $_name = [
        'status'       => 'Status',
        'wafTaskId'    => 'WafTaskId',
        'domainConfig' => 'DomainConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wafTaskId) {
            $res['WafTaskId'] = $this->wafTaskId;
        }
        if (null !== $this->domainConfig) {
            $res['DomainConfig'] = null !== $this->domainConfig ? $this->domainConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WafTaskId'])) {
            $model->wafTaskId = $map['WafTaskId'];
        }
        if (isset($map['DomainConfig'])) {
            $model->domainConfig = domainConfig::fromMap($map['DomainConfig']);
        }

        return $model;
    }
}
