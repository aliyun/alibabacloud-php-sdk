<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\GetUserFinishedAdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $commission;

    /**
     * @var string
     */
    public $marketingType;

    /**
     * @var string
     */
    public $objective;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'commission'    => 'Commission',
        'marketingType' => 'MarketingType',
        'objective'     => 'Objective',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commission) {
            $res['Commission'] = $this->commission;
        }
        if (null !== $this->marketingType) {
            $res['MarketingType'] = $this->marketingType;
        }
        if (null !== $this->objective) {
            $res['Objective'] = $this->objective;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Commission'])) {
            $model->commission = $map['Commission'];
        }
        if (isset($map['MarketingType'])) {
            $model->marketingType = $map['MarketingType'];
        }
        if (isset($map['Objective'])) {
            $model->objective = $map['Objective'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
