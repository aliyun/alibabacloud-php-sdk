<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DescribeWebAppStaticsOutput extends Model
{
    /**
     * @var int
     */
    public $length;

    /**
     * @var WebStaticsInfo[]
     */
    public $webAppStatics;
    protected $_name = [
        'length' => 'Length',
        'webAppStatics' => 'WebAppStatics',
    ];

    public function validate()
    {
        if (\is_array($this->webAppStatics)) {
            Model::validateArray($this->webAppStatics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->webAppStatics) {
            if (\is_array($this->webAppStatics)) {
                $res['WebAppStatics'] = [];
                $n1 = 0;
                foreach ($this->webAppStatics as $item1) {
                    $res['WebAppStatics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['WebAppStatics'])) {
            if (!empty($map['WebAppStatics'])) {
                $model->webAppStatics = [];
                $n1 = 0;
                foreach ($map['WebAppStatics'] as $item1) {
                    $model->webAppStatics[$n1++] = WebStaticsInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
