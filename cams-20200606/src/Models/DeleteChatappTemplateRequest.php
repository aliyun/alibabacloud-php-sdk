<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class DeleteChatappTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $custWabaId;

    /**
     * @var string
     */
    public $isvCode;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'custWabaId'   => 'CustWabaId',
        'isvCode'      => 'IsvCode',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteChatappTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
