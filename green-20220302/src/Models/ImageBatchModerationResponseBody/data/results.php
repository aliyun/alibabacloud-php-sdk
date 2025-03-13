<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results\ext;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results\result;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description Image supplementary reference information.
     *
     * @var ext
     */
    public $ext;

    /**
     * @description The risk labels, confidence scores, and other parameters of image detection results, in an array structure.
     *
     * @var result[]
     */
    public $result;

    /**
     * @description Risk level.
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The enhanced image detection service supports various detection services.
     *
     * @example baselineCheck
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'ext'       => 'Ext',
        'result'    => 'Result',
        'riskLevel' => 'RiskLevel',
        'service'   => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = null !== $this->ext ? $this->ext->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ext'])) {
            $model->ext = ext::fromMap($map['Ext']);
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
