<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAccessApplicationRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string[]
     */
    public $redirectUris;
    protected $_name = [
        'applicationName' => 'applicationName',
        'redirectUris' => 'redirectUris',
    ];

    public function validate()
    {
        if (\is_array($this->redirectUris)) {
            Model::validateArray($this->redirectUris);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['applicationName'] = $this->applicationName;
        }

        if (null !== $this->redirectUris) {
            if (\is_array($this->redirectUris)) {
                $res['redirectUris'] = [];
                $n1 = 0;
                foreach ($this->redirectUris as $item1) {
                    $res['redirectUris'][$n1] = $item1;
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
        if (isset($map['applicationName'])) {
            $model->applicationName = $map['applicationName'];
        }

        if (isset($map['redirectUris'])) {
            if (!empty($map['redirectUris'])) {
                $model->redirectUris = [];
                $n1 = 0;
                foreach ($map['redirectUris'] as $item1) {
                    $model->redirectUris[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
