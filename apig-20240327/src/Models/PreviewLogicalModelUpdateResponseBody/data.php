<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\PreviewLogicalModelUpdateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\PreviewLogicalModelUpdateResponseBody\data\apis;

class data extends Model
{
    /**
     * @var apis[]
     */
    public $apis;

    /**
     * @var string
     */
    public $confirmationToken;

    /**
     * @var int
     */
    public $revision;
    protected $_name = [
        'apis' => 'apis',
        'confirmationToken' => 'confirmationToken',
        'revision' => 'revision',
    ];

    public function validate()
    {
        if (\is_array($this->apis)) {
            Model::validateArray($this->apis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apis) {
            if (\is_array($this->apis)) {
                $res['apis'] = [];
                $n1 = 0;
                foreach ($this->apis as $item1) {
                    $res['apis'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->confirmationToken) {
            $res['confirmationToken'] = $this->confirmationToken;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
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
        if (isset($map['apis'])) {
            if (!empty($map['apis'])) {
                $model->apis = [];
                $n1 = 0;
                foreach ($map['apis'] as $item1) {
                    $model->apis[$n1] = apis::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['confirmationToken'])) {
            $model->confirmationToken = $map['confirmationToken'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        return $model;
    }
}
