<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddCustomTemplateAndGroupConsoleResponseBody\templateGroup;

class AddCustomTemplateAndGroupConsoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $result;

    /**
     * @var templateGroup
     */
    public $templateGroup;
    protected $_name = [
        'requestId' => 'RequestId',
        'result' => 'Result',
        'templateGroup' => 'TemplateGroup',
    ];

    public function validate()
    {
        if (null !== $this->templateGroup) {
            $this->templateGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->templateGroup) {
            $res['TemplateGroup'] = null !== $this->templateGroup ? $this->templateGroup->toArray($noStream) : $this->templateGroup;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['TemplateGroup'])) {
            $model->templateGroup = templateGroup::fromMap($map['TemplateGroup']);
        }

        return $model;
    }
}
