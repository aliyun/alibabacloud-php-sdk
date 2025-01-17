<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAttackerPortraitResponseBody\list_;

use AlibabaCloud\Dara\Model;

class network extends Model
{
    /**
     * @var string[]
     */
    public $externalIp;
    /**
     * @var string[]
     */
    public $internalIp;
    /**
     * @var string[]
     */
    public $realIp;
    protected $_name = [
        'externalIp' => 'ExternalIp',
        'internalIp' => 'InternalIp',
        'realIp'     => 'RealIp',
    ];

    public function validate()
    {
        if (\is_array($this->externalIp)) {
            Model::validateArray($this->externalIp);
        }
        if (\is_array($this->internalIp)) {
            Model::validateArray($this->internalIp);
        }
        if (\is_array($this->realIp)) {
            Model::validateArray($this->realIp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalIp) {
            if (\is_array($this->externalIp)) {
                $res['ExternalIp'] = [];
                $n1                = 0;
                foreach ($this->externalIp as $item1) {
                    $res['ExternalIp'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->internalIp) {
            if (\is_array($this->internalIp)) {
                $res['InternalIp'] = [];
                $n1                = 0;
                foreach ($this->internalIp as $item1) {
                    $res['InternalIp'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->realIp) {
            if (\is_array($this->realIp)) {
                $res['RealIp'] = [];
                $n1            = 0;
                foreach ($this->realIp as $item1) {
                    $res['RealIp'][$n1++] = $item1;
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
        if (isset($map['ExternalIp'])) {
            if (!empty($map['ExternalIp'])) {
                $model->externalIp = [];
                $n1                = 0;
                foreach ($map['ExternalIp'] as $item1) {
                    $model->externalIp[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InternalIp'])) {
            if (!empty($map['InternalIp'])) {
                $model->internalIp = [];
                $n1                = 0;
                foreach ($map['InternalIp'] as $item1) {
                    $model->internalIp[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RealIp'])) {
            if (!empty($map['RealIp'])) {
                $model->realIp = [];
                $n1            = 0;
                foreach ($map['RealIp'] as $item1) {
                    $model->realIp[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
