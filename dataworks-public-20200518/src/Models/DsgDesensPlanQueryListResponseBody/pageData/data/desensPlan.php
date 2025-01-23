<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanQueryListResponseBody\pageData\data;

use AlibabaCloud\Dara\Model;

class desensPlan extends Model
{
    /**
     * @var string
     */
    public $desensPlanType;
    /**
     * @var mixed[]
     */
    public $extParam;
    protected $_name = [
        'desensPlanType' => 'DesensPlanType',
        'extParam'       => 'ExtParam',
    ];

    public function validate()
    {
        if (\is_array($this->extParam)) {
            Model::validateArray($this->extParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desensPlanType) {
            $res['DesensPlanType'] = $this->desensPlanType;
        }

        if (null !== $this->extParam) {
            if (\is_array($this->extParam)) {
                $res['ExtParam'] = [];
                foreach ($this->extParam as $key1 => $value1) {
                    $res['ExtParam'][$key1] = $value1;
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
        if (isset($map['DesensPlanType'])) {
            $model->desensPlanType = $map['DesensPlanType'];
        }

        if (isset($map['ExtParam'])) {
            if (!empty($map['ExtParam'])) {
                $model->extParam = [];
                foreach ($map['ExtParam'] as $key1 => $value1) {
                    $model->extParam[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
