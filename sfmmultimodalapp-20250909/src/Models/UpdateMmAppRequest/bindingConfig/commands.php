<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRequest\bindingConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRequest\bindingConfig\commands\tools;

class commands extends Model
{
    /**
     * @var string
     */
    public $domainCode;

    /**
     * @var tools[]
     */
    public $tools;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'domainCode' => 'DomainCode',
        'tools' => 'Tools',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['Tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['Tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['Tools'])) {
            if (!empty($map['Tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['Tools'] as $item1) {
                    $model->tools[$n1] = tools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
