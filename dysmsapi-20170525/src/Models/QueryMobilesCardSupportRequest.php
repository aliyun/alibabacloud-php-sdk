<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryMobilesCardSupportRequest extends Model
{
    /**
     * @description The list of mobile phone numbers.
     *
     * This parameter is required.
     * @var mixed[][]
     */
    public $mobiles;

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
        'mobiles'      => 'Mobiles',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobiles) {
            $res['Mobiles'] = $this->mobiles;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMobilesCardSupportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mobiles'])) {
            if (!empty($map['Mobiles'])) {
                $model->mobiles = $map['Mobiles'];
            }
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
