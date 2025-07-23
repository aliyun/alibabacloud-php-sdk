<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest;

use AlibabaCloud\Tea\Model;

class dysmsAttributes extends Model
{
    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'signName' => 'SignName',
        'templateCode' => 'TemplateCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dysmsAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
