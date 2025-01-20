<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetRemediationTemplateResponseBody\remediationTemplates;

class GetRemediationTemplateResponseBody extends Model
{
    /**
     * @var remediationTemplates[]
     */
    public $remediationTemplates;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediationTemplates' => 'RemediationTemplates',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->remediationTemplates)) {
            Model::validateArray($this->remediationTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remediationTemplates) {
            if (\is_array($this->remediationTemplates)) {
                $res['RemediationTemplates'] = [];
                $n1                          = 0;
                foreach ($this->remediationTemplates as $item1) {
                    $res['RemediationTemplates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RemediationTemplates'])) {
            if (!empty($map['RemediationTemplates'])) {
                $model->remediationTemplates = [];
                $n1                          = 0;
                foreach ($map['RemediationTemplates'] as $item1) {
                    $model->remediationTemplates[$n1++] = remediationTemplates::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
