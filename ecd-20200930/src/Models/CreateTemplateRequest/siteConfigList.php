<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return siteConfigList
     */
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
