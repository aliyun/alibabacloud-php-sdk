<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetRemediationTemplateResponseBody\remediationTemplates;
use AlibabaCloud\Tea\Model;

class GetRemediationTemplateResponseBody extends Model
{
    /**
     * @description The information about the automatic remediation template.
     *
     * @var remediationTemplates[]
     */
    public $remediationTemplates;

    /**
     * @description The request ID.
     *
     * @example E232FC35-BD40-51E3-B2EB-09416A234939
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediationTemplates' => 'RemediationTemplates',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediationTemplates) {
            $res['RemediationTemplates'] = [];
            if (null !== $this->remediationTemplates && \is_array($this->remediationTemplates)) {
                $n = 0;
                foreach ($this->remediationTemplates as $item) {
                    $res['RemediationTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRemediationTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemediationTemplates'])) {
            if (!empty($map['RemediationTemplates'])) {
                $model->remediationTemplates = [];
                $n                           = 0;
                foreach ($map['RemediationTemplates'] as $item) {
                    $model->remediationTemplates[$n++] = null !== $item ? remediationTemplates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
