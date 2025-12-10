<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponseBody\enabledServicePrincipals\enabledServicePrincipal;

class enabledServicePrincipals extends Model
{
    /**
     * @var enabledServicePrincipal[]
     */
    public $enabledServicePrincipal;
    protected $_name = [
        'enabledServicePrincipal' => 'EnabledServicePrincipal',
    ];

    public function validate()
    {
        if (\is_array($this->enabledServicePrincipal)) {
            Model::validateArray($this->enabledServicePrincipal);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabledServicePrincipal) {
            if (\is_array($this->enabledServicePrincipal)) {
                $res['EnabledServicePrincipal'] = [];
                $n1 = 0;
                foreach ($this->enabledServicePrincipal as $item1) {
                    $res['EnabledServicePrincipal'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnabledServicePrincipal'])) {
            if (!empty($map['EnabledServicePrincipal'])) {
                $model->enabledServicePrincipal = [];
                $n1 = 0;
                foreach ($map['EnabledServicePrincipal'] as $item1) {
                    $model->enabledServicePrincipal[$n1] = enabledServicePrincipal::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
