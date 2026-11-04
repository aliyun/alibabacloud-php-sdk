<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseResponseBody\contactFlow;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseResponseBody\contactFlow\versions\contactFlowVersion;

class versions extends Model
{
    /**
     * @var contactFlowVersion[]
     */
    public $contactFlowVersion;
    protected $_name = [
        'contactFlowVersion' => 'ContactFlowVersion',
    ];

    public function validate()
    {
        if (\is_array($this->contactFlowVersion)) {
            Model::validateArray($this->contactFlowVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactFlowVersion) {
            if (\is_array($this->contactFlowVersion)) {
                $res['ContactFlowVersion'] = [];
                $n1 = 0;
                foreach ($this->contactFlowVersion as $item1) {
                    $res['ContactFlowVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ContactFlowVersion'])) {
            if (!empty($map['ContactFlowVersion'])) {
                $model->contactFlowVersion = [];
                $n1 = 0;
                foreach ($map['ContactFlowVersion'] as $item1) {
                    $model->contactFlowVersion[$n1] = contactFlowVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
