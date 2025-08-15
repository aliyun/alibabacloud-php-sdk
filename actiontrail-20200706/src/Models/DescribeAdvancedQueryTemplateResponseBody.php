<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeAdvancedQueryTemplateResponseBody\templatePage;

class DescribeAdvancedQueryTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templatePage
     */
    public $templatePage;
    protected $_name = [
        'requestId' => 'RequestId',
        'templatePage' => 'TemplatePage',
    ];

    public function validate()
    {
        if (null !== $this->templatePage) {
            $this->templatePage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templatePage) {
            $res['TemplatePage'] = null !== $this->templatePage ? $this->templatePage->toArray($noStream) : $this->templatePage;
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

        if (isset($map['TemplatePage'])) {
            $model->templatePage = templatePage::fromMap($map['TemplatePage']);
        }

        return $model;
    }
}
