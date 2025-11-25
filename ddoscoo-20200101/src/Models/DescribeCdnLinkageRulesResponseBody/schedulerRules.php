<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCdnLinkageRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCdnLinkageRulesResponseBody\schedulerRules\cdnLinkageRule;

class schedulerRules extends Model
{
    /**
     * @var int
     */
    public $cdnLinkageEnable;

    /**
     * @var cdnLinkageRule
     */
    public $cdnLinkageRule;

    /**
     * @var string
     */
    public $domain;
    protected $_name = [
        'cdnLinkageEnable' => 'CdnLinkageEnable',
        'cdnLinkageRule' => 'CdnLinkageRule',
        'domain' => 'Domain',
    ];

    public function validate()
    {
        if (null !== $this->cdnLinkageRule) {
            $this->cdnLinkageRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdnLinkageEnable) {
            $res['CdnLinkageEnable'] = $this->cdnLinkageEnable;
        }

        if (null !== $this->cdnLinkageRule) {
            $res['CdnLinkageRule'] = null !== $this->cdnLinkageRule ? $this->cdnLinkageRule->toArray($noStream) : $this->cdnLinkageRule;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['CdnLinkageEnable'])) {
            $model->cdnLinkageEnable = $map['CdnLinkageEnable'];
        }

        if (isset($map['CdnLinkageRule'])) {
            $model->cdnLinkageRule = cdnLinkageRule::fromMap($map['CdnLinkageRule']);
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
