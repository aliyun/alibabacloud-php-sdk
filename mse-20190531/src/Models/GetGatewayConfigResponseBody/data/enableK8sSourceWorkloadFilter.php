<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class enableK8sSourceWorkloadFilter extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $filterOpt;

    /**
     * @var string
     */
    public $labelKey;

    /**
     * @var string
     */
    public $labelValue;
    protected $_name = [
        'enable' => 'Enable',
        'filterOpt' => 'FilterOpt',
        'labelKey' => 'LabelKey',
        'labelValue' => 'LabelValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->filterOpt) {
            $res['FilterOpt'] = $this->filterOpt;
        }
        if (null !== $this->labelKey) {
            $res['LabelKey'] = $this->labelKey;
        }
        if (null !== $this->labelValue) {
            $res['LabelValue'] = $this->labelValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enableK8sSourceWorkloadFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['FilterOpt'])) {
            $model->filterOpt = $map['FilterOpt'];
        }
        if (isset($map['LabelKey'])) {
            $model->labelKey = $map['LabelKey'];
        }
        if (isset($map['LabelValue'])) {
            $model->labelValue = $map['LabelValue'];
        }

        return $model;
    }
}
