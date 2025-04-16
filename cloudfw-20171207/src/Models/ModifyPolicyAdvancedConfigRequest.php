<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyPolicyAdvancedConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $eips;

    /**
     * @var string
     */
    public $internetSwitch;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'eips' => 'Eips',
        'internetSwitch' => 'InternetSwitch',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        if (\is_array($this->eips)) {
            Model::validateArray($this->eips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eips) {
            if (\is_array($this->eips)) {
                $res['Eips'] = [];
                $n1 = 0;
                foreach ($this->eips as $item1) {
                    $res['Eips'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->internetSwitch) {
            $res['InternetSwitch'] = $this->internetSwitch;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['Eips'])) {
            if (!empty($map['Eips'])) {
                $model->eips = [];
                $n1 = 0;
                foreach ($map['Eips'] as $item1) {
                    $model->eips[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InternetSwitch'])) {
            $model->internetSwitch = $map['InternetSwitch'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
