<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTemplateGroupConsoleResponseBody\templateGroups;

class ListTemplateGroupConsoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateGroups
     */
    public $templateGroups;
    protected $_name = [
        'requestId' => 'RequestId',
        'templateGroups' => 'TemplateGroups',
    ];

    public function validate()
    {
        if (null !== $this->templateGroups) {
            $this->templateGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateGroups) {
            $res['TemplateGroups'] = null !== $this->templateGroups ? $this->templateGroups->toArray($noStream) : $this->templateGroups;
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

        if (isset($map['TemplateGroups'])) {
            $model->templateGroups = templateGroups::fromMap($map['TemplateGroups']);
        }

        return $model;
    }
}
