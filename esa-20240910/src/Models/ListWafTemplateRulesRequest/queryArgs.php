<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafTemplateRulesRequest;

use AlibabaCloud\Dara\Model;

class queryArgs extends Model
{
    /**
     * @var string[]
     */
    public $kinds;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'kinds' => 'Kinds',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->kinds)) {
            Model::validateArray($this->kinds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kinds) {
            if (\is_array($this->kinds)) {
                $res['Kinds'] = [];
                $n1 = 0;
                foreach ($this->kinds as $item1) {
                    $res['Kinds'][$n1] = $item1;
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
        if (isset($map['Kinds'])) {
            if (!empty($map['Kinds'])) {
                $model->kinds = [];
                $n1 = 0;
                foreach ($map['Kinds'] as $item1) {
                    $model->kinds[$n1] = $item1;
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
