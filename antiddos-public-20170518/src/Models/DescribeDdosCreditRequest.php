<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeDdosCreditRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $ddosRegionId;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'lang'         => 'Lang',
        'ddosRegionId' => 'DdosRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosCreditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }

        return $model;
    }
}
