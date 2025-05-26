<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesResponseBody\data;

use AlibabaCloud\Dara\Model;

class siteConfigList extends Model
{
    /**
     * @var string
     */
    public $appRuleId;

    /**
     * @var string
     */
    public $siteId;
    protected $_name = [
        'appRuleId' => 'AppRuleId',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appRuleId) {
            $res['AppRuleId'] = $this->appRuleId;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['AppRuleId'])) {
            $model->appRuleId = $map['AppRuleId'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
