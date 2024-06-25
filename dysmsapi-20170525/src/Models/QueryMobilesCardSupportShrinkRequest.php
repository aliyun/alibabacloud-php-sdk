<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryMobilesCardSupportShrinkRequest extends Model
{
    /**
     * @description The list of mobile phone numbers.
     *
     * This parameter is required.
     * @var string
     */
    public $mobilesShrink;

    /**
     * @description The code of the message template. You can view the template code in the **Template Code** column on the **Templates** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * This parameter is required.
     * @example CARD_SMS_0000
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'mobilesShrink' => 'Mobiles',
        'templateCode'  => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobilesShrink) {
            $res['Mobiles'] = $this->mobilesShrink;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMobilesCardSupportShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mobiles'])) {
            $model->mobilesShrink = $map['Mobiles'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
