<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnUserConfigsRequest extends Model
{
    /**
     * @description The configuration that you want to query. Valid values:
     *
     *   domain_business_control: user configurations
     *   bot_basic: the basic edition of bot traffic management, which supports authorized crawlers and provides threat intelligence
     *   bot_Advance: the advanced edition of bot traffic management, which supports authorized crawlers and AI intelligent protection and provides threat intelligence
     *
     * @example domain_business_control
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
